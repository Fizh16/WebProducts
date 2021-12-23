<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-primary">

    <div class="row align-items-center" style="height: 100vh; width: 100vw">
        <div class="d-flex justify-content-center">
            <div class="flex-column">
                <h2 class="text-center text-white">REGISTER</h2>
                <div class="card rounded-3" style="width: 30vw">
                    <div class="card-body">
                        <form class="p-3" action="/register" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="inputNama" class="form-label">Name</label>
                                <input type="text" @class([ 'form-control', 'is-invalid' => $errors->has('inputNama') ]) id="inputNama" name="inputNama" value="{{ old('inputNama') }}">
                                @error('inputNama')
                                <div class="invalid-feedback">
                                    {{ $errors->first('inputNama') }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email address</label>
                                <input type="email" @class([ 'form-control', 'is-invalid' => $errors->has('inputEmail') ]) id="inputEmail" name="inputEmail" value="{{ old('inputEmail') }}">
                                @error('inputEmail')
                                <div class="invalid-feedback">
                                    {{ $errors->first('inputEmail') }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" @class([ 'form-control', 'is-invalid' => $errors->has('inputPassword') ]) id="inputPassword" name="inputPassword">
                                @error('inputPassword')
                                <div class="invalid-feedback">
                                    {{ $errors->first('inputPassword') }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select @class([ 'form-select', 'is-invalid' => $errors->has('role') ]) aria-label="Default select example" name="role">
                                    <option selected value="">Choose Role</option>
                                    <option value="member">Member</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('role')
                                <div class="invalid-feedback">
                                    {{ $errors->first('role') }}
                                </div>
                                @enderror
                            </div>
                            <p>
                                Already have an account?
                                <a href="/login" class="text-decoration-none">Login</a>
                            </p>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>