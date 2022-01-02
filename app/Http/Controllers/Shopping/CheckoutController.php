<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Mailers\AppMailer;
use App\Models\Category;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function store(Request $request, AppMailer $mailer)
    {
        $cart = $request->session()->get('cart', []);
        if (!is_array($cart) || count($cart) === 0) {
            return redirect()->back();
        }

        $products = array_values(array_map(function(array $product) {
            return sprintf('%s (%s): %s PLN', $product['name'], $product['quantity'], $product['price']);
        }, $cart));

        $products[] = sprintf('Total: %s', array_sum(array_column($cart, 'price')));

        $description = implode("\n", $products);

        // echo nl2br($description);
        // exit();

        $ticket = new Ticket([
            'title' => 'Shopping request',
            'user_id' => Auth::user()->id,
            'ticket_id' => Str::random(10),
            'priority' => 'High',
            'message' => $description,
            'status' => "Open"
        ]);

        $ticket->category()->associate(Category::where('name', 'Shopping')->first());

        $ticket->save();

        $mailer->sendTicketInformation(Auth::user(), $ticket);

        $request->session()->forget('cart');

        $request->session()->flash('message', 'Your shopping request has been created.');

        return redirect()->route('my-tickets');
    }
}
