@if(session('success'))
    <div class="alert alert-success" id="successAlert">
        {{session('success')}}
        <button class="close" id="closeSuccessAlert">
            <i class="fa-solid fa-x"></i>
        </button>
    </div>
@endif

