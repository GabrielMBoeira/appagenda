@extends('app.layouts.header-site')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">

                <h3 class="title-form">Login</h3>
                <form action="{{ route('establishment.store') }}" method="post">
                    @method('POST')
                    @csrf

                    aqui

                </form>
            </div>
    </section>
@endsection


{{-- Script Modal --}}
<script>

    window.onload = function() {
        $('#exampleModalCenter').appendTo("body").modal('show');
    }

    function closeModal() {
        $('#exampleModalCenter').modal('hide');
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>








