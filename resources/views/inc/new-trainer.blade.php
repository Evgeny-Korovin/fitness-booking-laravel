@include('inc.messages')
<div class="row">
    <h2 class="mt-4">Добавить тренера в клуб</h2>
    <form action="{{ route('post-trainer') }}" method="POST" class="needs-validation mt-3" novalidate>
        @csrf
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Введите имя" required>
                <div class="invalid-feedback">
                    Введите имя.
                </div>
            </div>
            <div class="form-group col-md-6 mb-3">
                <input type="text" name="surname" class="form-control" placeholder="Введите фамилию" required>
                <div class="invalid-feedback">
                    Введите фамилию.
                </div>
            </div>
        </div>
</div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="tel" name="phone" class="form-control" placeholder="Введите телефон" required>
                <div class="invalid-feedback">
                    Введите номер телефона.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" name="special" class="form-control" placeholder="Введите специализацию" required>
                <div class="invalid-feedback">
                    Введите специализацию.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <button type="submit" class="btn btn-success">Добавить тренера</button>
            </div>
        </div>
    </form>
