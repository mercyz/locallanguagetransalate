@extends('layouts.admin')
@section('content')

<div class="container py-3 mt-3 mb-5">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" id="newLang">New Word</button>
    </div>
    <div class="row pt-4">
        <div class="col-md-12">
            <table class="table " id="lang">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>English</th>
                        <th>Khana</th>
                        <th>Gokana</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($languages as $key => $lang)
                        <tr>
                            <td>{{$key +=1}}</td>
                            <td class="text-capitalize">{{$lang->english}}</td>
                            <td class="text-capitalize">{{$lang->khana}}</td>
                            <td class="text-capitalize">{{$lang->gokana}}</td>
                            <td>
                                <form action="{{route("language.destroy", $lang->reference)}}" method="post">
                                @csrf @method("delete")
                                <button class="btn_custom"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


 <!-- The Modal -->
 <div id="langModal" class="modal">
   <!-- Modal content -->
   <div class="modal-content">
       <div class="d-flex justify-content-between">
           <h4 class="py-3">Add New Word</h4>
               <span class="close">&times;</span>
       </div>
        <div class="conatiner">
            <div class="row">
                <div class="col">
                    <form action="{{route("language.store")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">English</label>
                            <input type="text" class="form-control" placeholder="English" name="english">
                        </div>
                        <div class="form-group">
                            <label for="">Khana</label>
                            <input type="text" class="form-control" placeholder="Khana" name="khana">
                        </div>
                        <div class="form-group">
                            <label for="">Gokana</label>
                            <input type="text" class="form-control" placeholder="Gokana" name="gokana">
                        </div>
                        <button class="btn btn-primary">Add New</button>
                    </form>
                </div>
            </div>
        </div>
   </div>
 </div>
@endsection
