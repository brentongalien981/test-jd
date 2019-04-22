@extends('main')

@section('customizedHead')
<style>
    .form-group {
        margin-bottom: 2rem;
    }
</style>
@endsection

@section('mainBody')

<div class="container mainBody">
    <div class="row">
        <div class="col-md-4 col-sm-12">

            <h6>Jada D'Aversa</h6>

            <h6>jadaversa@icloud.com</h6>
        </div>


        <div class="col-md-8 col-sm-12">


            <form>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputFirstName" placeholder="* First Name">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputLastName" placeholder="* Last Name">
                    </div>

                </div>


                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" placeholder="* Email Address">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="inputSubject" placeholder="* Subject">
                </div>


                <div class="form-group">
                    <textarea class="form-control" rows="5" id="textareaMessage" placeholder="* Message"></textarea>
                </div>


                <button type="submit" class="btn btn-dark">SUBMIT</button>

            </form>


        </div>

    </div>
</div>
@endsection