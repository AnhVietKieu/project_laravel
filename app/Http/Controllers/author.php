<?php

namespace App\Http\Controllers;

use App\tacgia;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;



class author extends Controller
{
 	public function view()
	{
		
		$data['tacgias']=tacgia::all();
		return view('area.table.tacgia.view',$data);
		
	}
	public function create(Request $request)
	{
		return view('area.table.tacgia.create');
	}
	public function postcreate(Request $request)
	{
		if(tacgia::insert($request->all()) == true)
		{
			session::flash('Thongbao','Them tac gia thanh cong');

            return redirect()->back();
		}else
		{
			session::flash('Thongbao','Them tac gia khong thanh cong');

            return redirect()->back();
		}
	}

	public function destroy($id)
	{
		
		if(tacgia::deleteauthor(str_replace('.html','',$id)) == true)
		{
			session::flash('Thongbao','Xoa tac gia thanh cong');

            return redirect()->back();
		}else
		{

			session::flash('Thongbao','Xoa tac gia khong thanh cong');

            return redirect()->back();
		}

		
	}

	public function update($id)
	{
		$data['update_tacgia'] = tacgia::find(str_replace('.html','',$id));
		return view('area.table.tacgia.update',$data);
	}

	public function postupdate($id,Request $request)
	{	
		$result = tacgia::find($id);
        if($result) 
        {
            $result->update($request->all());

           	session::flash('Thongbao','Update tac gia thanh cong');

            return redirect('admin/tacgia/view-tac-gia.html');
        }else
        {

        	session::flash('Thongbao','update tac gia khong thanh cong');

            return redirect()->back();
        }
        
        

			
	}

}
