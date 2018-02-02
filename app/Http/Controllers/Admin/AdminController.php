<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePhoneManufacturerRequest;
use App\Http\Requests\StorePhoneModelRequest;
use App\Http\Requests\StoreRepairRequest;
use App\PhoneManufacturer;
use App\PhoneModel;
use App\Repair;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view ('admin.index');
    }


    public function usersIndex()
    {
        $users = User::paginate(5);
        return view('admin.usersList', compact('users'));
    }


    public function repairsIndex()
    {
        $repairs = Repair::latest   ()->paginate(5);
        return view('admin.repairsList', compact('repairs'));

    }


    public function modelsCreate()
    {
        $phones = PhoneManufacturer::all();
        return view('admin.modelsCreate', compact('phones'));
    }

    public function modelsStore(StorePhoneModelRequest $request)
    {
         PhoneModel::create($request->all());
         return redirect()->route('index')->with(['message'=>'Modelis pridetas sekmingai']);
    }


    public function phonesCreate()
    {
        return view ('admin.phonesCreate');
    }


    public function phonesStore(StorePhoneManufacturerRequest $request)
    {
        PhoneManufacturer::create($request->all());
        return redirect()->route('index')->with(['message'=>'Gamintojas pridetas sekmingai']);

    }

    public function repairsEdit(Repair $repair)
    {
        $repair = Repair::findOrFail($repair->id);
        $models = PhoneModel::all();
        return view('admin.repairsEdit', compact('repair', 'models'));
    }

    public function repairsUpdate(StoreRepairRequest $request, Repair $repair)
    {
        $repair->model_id = $request->model_id;
        $repair->message = $request->message;
        $repair->update();
        return redirect()->route('repairs.list')->with(['message'=>'Informacija pakoreguota sekmingai']);
    }

    public function repairsDestroy(Repair $repair)
    {
        $repair->delete();
        return redirect()->route('repairs.list')->with(['message' => 'Informacija istrinti sekmingai']);
    }
}
