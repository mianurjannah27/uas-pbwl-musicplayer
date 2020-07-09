@extends('template.index')

@section('content')

     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
</nav>
            <div class="card">
                <div class="card-header"></div>          
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1>Selamat Datang di Sistem Informasi Music Player</h1> 
                    <h2>Enjoy Your Music</h2>
                    <h1></h1>
                </div>
            </div>


        </div>
    </div>

@endsection
