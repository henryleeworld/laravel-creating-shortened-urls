<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container mt-2">
            <h4 class="font-weight-bold mb-3 text-success text-center">{{ __('Short URL Generator: Do not insert illegal or dangerous links.') }}</h4>
            <div class="card">
                <div class="card-header">
                    <form method="POST" action="{{ route('shortened-url.generate.post') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="url" class="form-control" placeholder="{{ __('Destination URL') }}" />
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">{{ __('Generate') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                    @endif

                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Short URL') }}</th>
                                <th>{{ __('Destination URL') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shortenedUrls as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td><a href="{{ $row->default_short_url }}" target="_blank">{{ $row->default_short_url }}</a></td>
                                <td>{{ $row->destination_url }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
