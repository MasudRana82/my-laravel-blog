@extends('admin.admin_master')
@section('admin_content')
    


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
               
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Tag</h2>
                

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{url('/color')}}" method="post" >
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Tag</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name"  required>
                            </div>
                        </div>


                       

                        </div>

                       


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Tag</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
   
@endsection