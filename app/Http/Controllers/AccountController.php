<?php

namespace App\Http\Controllers;
use Auth;
use \App\Ph_customer;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acc = new Ph_customer;
        $accounts = $acc->where('id', 'like', Auth::user()->email)->get();
        $account['role'] = '';
        $account['phone'] = '';
        $account['postcode'] = '';
        $account['address_1'] = '';
        $account['address_2'] = '';
        $account['image'] = '';
        $city = '';
        $state = '';
        foreach ($accounts as $item){
            $account['role'] .= $item['role'];
            $account['phone'] .= $item['phone'];
            $account['postcode'] .= $item['postcode'];
            $account['address_1'] .= $item['address_1'];
            $account['address_2'] .= $item['address_2'];
            $account['image'] .= $item['image'];
            $city .= $item['city'];
            $state .=  $item['state'];
        }
        
        return view('pages.account', compact('account', 'city', 'state'));
    }

    public function editAccount(request $request){
        $id = request('id');
        if(Ph_customer::where('id', '=', $id)->exists()){
            $passport = Ph_customer::find($id);
            $passport->address_1 = request('address_1');
            $passport->country = request('country');
            $passport->phone = request('phone');
            $passport->id = $id;
            $passport->postcode = request('postcode');
            $passport->address_2 = request('address_2');    
            $passport->city = request('city');
            $passport->state = request('state');
            $passport->save();
            return redirect(route('account'))->with('success', 'Account information added succesfully');
        } else {
            $passport = new Ph_customer;
            $passport->address_1 = request('address_1');
            $passport->country = request('country');
            $passport->phone = request('phone');
            $passport->id = $id;
            $passport->postcode = request('postcode');
            $passport->city = request('city');
            $passport->state = request('state');
            $passport->address_2 = request('address_2');
            $passport->save();
            return redirect(route('account'))->with('success', 'Account updated succesfully');
            }
        }

        public function editAccountImage(request $request){
            $post = Ph_customer::find(Auth::user()->email);

            if($request->hasFile('file')){
                $uploadedFile = $request->file('file');
                $filename = time().$uploadedFile->getClientOriginalName();

                Storage::disk('public')->putFileAs(
                    'files/'.$filename,
                    $uploadedFile,
                    $filename
                );

            $post->image = 'storage/files/'.$filename.'/'.$filename;
            $post->save();
            return redirect()->route('account')->with('message', 'Successfully updated profile image');
            } else {
                return redirect()->back()->withErrors('An error occured!');
            }
        }
        
 }