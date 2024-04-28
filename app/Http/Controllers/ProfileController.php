<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Favorites;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $favorites = $user->favorites()->get();
    
        return view('profile/index', [
            'user' => $user,
            'favorites' => $favorites,
        ]);
    }

    public function toggleFavorites(Request $request, $id)
    {
        $user = Auth::user();
        $cafeId = $id;

        $cafe = Cafe::findOrFail($cafeId);

        // Check if the user has already favorited this cafe
        if ($user->favorites()->where('cafe_id', $cafeId)->exists()) {
            // If the user has favorited the cafe, remove it from favorites
            $user->favorites()->detach($cafeId);

            return redirect()->route('profile.index', $cafeId)->with('success', "Cafe: {$cafe['name']} removed from favorites.");
        } else {
            // If the user has not favorited the cafe, add it to favorites
            $user->favorites()->attach($cafeId);

            return redirect()->route('profile.index', $cafeId)->with('success', "Cafe: {$cafe['name']} added to favorites.");
        }
    }

}