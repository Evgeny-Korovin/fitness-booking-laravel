<div class="row">
<h2 class="mt-3">Добавить клиента в клуб</h2>
<form action="components/post_user.php" method="POST" class="needs-validation mt-3" novalidate>
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
            <input type="email" name="email" class="form-control" placeholder="Введите email" required>
            <div class="invalid-feedback">
                Введите email.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <input type="password" name="pass" class="form-control" placeholder="Создайте пароль" required>
            <div class="invalid-feedback">
                Введите пароль.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <button type="submit" class="btn btn-success">Добавить клиента</button>
        </div>
    </div>
</form>
