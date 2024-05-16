@extends('admin.base')
<style>
    .container-fluid {
        background: #fff;
    }
    .page-breadcrumb {
        background: #fff;
    }
</style>
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Property</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Property</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                    <form action="{{ route('listings.store') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                        
                        <div class="form-group">
                            <label>Property Title :</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Price :</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}"  placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Square Feet :</label>
                            <input type="number" name="square_feet" class="form-control" value="{{ old('square_feet') }}"  placeholder="Square Feet">
                        </div>
                        <div class="form-group">
                            <label>Lot Size :</label>
                            <input type="number" name="lot_size" class="form-control"  value="{{ old('lot_size') }}" placeholder="Lot Size">
                        </div>
                        <div class="form-group">
                            <label>Bedroom :</label>
                            <input type="number" name="bedroom" class="form-control" value="{{ old('bedroom') }}" placeholder="Bedroom">
                        </div>                        
                        <div class="form-group">
                            <label>Bathroom :</label>
                            <input type="number" name="bathroom" class="form-control" value="{{ old('bathroom') }}" placeholder="Bathroom">
                        </div>
  
                        <div class="form-group">
                            <label>Garage :</label>
                            <input type="number" name="garage" class="form-control"  value="{{ old('garage') }}" placeholder="Garage">
                        </div>
                          
                        <div class="form-group">
                            <label>City :</label>
                            <input type="text" name="city" class="form-control"  value="{{ old('city') }}" placeholder="City">
                        </div>                        
                        <div class="form-group">
                            <label>Country :</label>
                            <input type="text" name="country" class="form-control"  value="{{ old('country') }}" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <label>latitude :</label>
                            <input type="text" name="latitude" class="form-control"  value="{{ old('latitude') }}" placeholder="latitude">
                        </div>
                        <div class="form-group">
                            <label>longitude:</label>
                            <input type="text" name="longitude" class="form-control"  value="{{ old('longitude') }}" placeholder="longitude">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <textarea class="ckeditor form-control" name="description">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status :</label>
                            <select name="status" class="form-control" id="myselect">
                                <option value="1">Sell</option>
                                <option value="2">Rent</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Thumbnail :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image" class="">
                                <!-- <label for="image" class="custom-file-label">Choose Image</label> -->
                                
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_one" class="custom-file-inputs">
                                <!-- <label for="image_one" class="custom-file-label">Choose Image</label> -->

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_two" class="custom-file-inputs">
                                <!-- <label for="image_two" class="custom-file-label">Choose Image</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_three" class="custom-file-inputs">
                                <!-- <label for="image_three" class="custom-file-label">Choose Image</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_four" class="custom-file-inputs">
                                <!-- <label for="image_four" class="custom-file-label">Choose Image</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_five" class="custom-file-inputs">
                                <!-- <label for="image_five" class="custom-file-label">Choose Image</label>                            -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_six" class="custom-file-inputs">
                                <!-- <label for="image_six" class="custom-file-label">Choose Image</label>                            -->
                                
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">Agent :</label>
                            <div class="col-sm-12">
                                <select  name="realtor_id" class="form-control form-control-line" required>
                                <option selected style="display:none">Select Agent</option>
                                @foreach($realtors as $realtor)
                                    <option value="{{ $realtor->id }}" >{{ $realtor->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">Is Publish :</label>
                            <div class="col-sm-12">
                                <select  name="is_published" class="form-control form-control-line"  required>
                                <option selected style="display:none">Select Publish/Draft</option>
                                    <option @if (old('is_published') == "1") {{ 'selected' }} @endif value="1">Publish</option>
                                    <option @if (old('is_published') == "0") {{ 'selected' }} @endif  value="0">Draft</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" style="background-color:#FFA920;border:#333">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection