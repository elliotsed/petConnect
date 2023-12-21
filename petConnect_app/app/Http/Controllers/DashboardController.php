<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $user = auth()->user();

        $userOrders = Order::where('user_id', $user->id)->with('product', 'product.user')->get();

        $userProducts = Product::where('user_id', $user->id)->get();

        return response()->view('dashboard', ['userOrders' => $userOrders, 'userProducts' => $userProducts])->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }

    public function delete($id)
    {
        try {
            // Trouver la commande avec l'ID spécifié
            $order = Order::findOrFail($id);

            // Ajoutez ici toute logique supplémentaire que vous pourriez avoir
            // par exemple, vérifier si l'utilisateur actuel a la permission de supprimer cette commande

            // Supprimer la commande
            $order->delete();

            // Rediriger avec un message de succès
            return back()->with('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            // Gérer toute exception qui pourrait se produire, par exemple, si la commande n'est pas trouvée
            return back()->with('error', 'Error deleting order.');
        }
    }

}
