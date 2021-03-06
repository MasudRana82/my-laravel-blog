@extends('admin.admin_master')
@section('admin_content')
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row-fluid sortable">
        <div class="box span12">
            
            <div class="box-header" data-original-title>
                 <p class="alert-success">
                <?php
                            $msg=Session::get('messege');
                            if($msg){
                                echo "$msg";
                                 Session::put('messege',null);
                            }
                ?>

                    </p>
               
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Post </h2>
                

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{url('/post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>

                        

                        <div class="control-group">
                            <label class="control-label" for="date01">Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" required>
                            </div>
                        </div>
 <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                             <div class="controls">
                             <textarea class="ckeditor form-control" name="description" rows="12" required></textarea>
                              </div>
                             </div>

                         <div class="control-group">
                            <label class="control-label" for="date01">Select Category</label>
                            <div class="controls">
                                 <select name="category">
                                <option>select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option> 
                                @endforeach
                               
                               </select>
                            </div>
                        </div>
                         

                       

                       

       <div class="control-group">
               <label class="control-label" for="date01">Select tag</label>        
              <div class="controls">                   
                                       
            @foreach ($tags as $tag)
                <div class="custom-control custom-checkbox">
                    
                <input class="custom-control-input" name="tag[]" type="checkbox" id="{{$tag->id}}" value="{{$tag->id}}">
                <label for="{{$tag->id}}" class="custom-control-label">{{$tag->name}} </label>


                </div>
             @endforeach
                                            
                   </div>

</div>
                         


                       

                       

                        <div class="control-group">
                            <label class="control-label">Image</label>
                            <div class="controls">
                                <input type="file" name="file[]" multiple required>
                            </div>
                        </div>
                        
        
                         

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Post</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
   
@endsection