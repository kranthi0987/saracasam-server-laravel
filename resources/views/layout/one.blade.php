@extends('layout.master')


@section('content')

        {!! Form::open(['method'=>'post','action'=>'saracasamcontroller@store','files'=>true,'class'=>'col s12']) !!}
        <div class="input-field col s12">
            <i class="material-icons prefix">burst_mode</i>
            <input id="icon_prefix" type="text" name="imagename" class="validate">
            <label for="icon_prefix">Name</label>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">chrome_reader_mode</i>
                    <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                    <label for="textarea1">image description</label>
                </div>
            </div>
        </div>
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" name="tag" class="autocomplete">
                        <label for="autocomplete-input">#tags</label>
                    </div>
                </div>
            </div>
            <div class="file-field input-field ">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="imagepath" multiple>
                </div>
                <div class="file-path-wrapper ">
                    <input class="file-path validate" name="imagepath" type="text" placeholder="Upload one or more files">
                </div>
            </div>
            <button class="btn waves-effect waves-purple" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>

            <button class="btn waves-effect waves-red" type="reset" name="action">reset
                <i class="material-icons right">cached</i>
            </button>


            {!! Form::close() !!}

@stop

