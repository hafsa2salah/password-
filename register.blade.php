<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>تسجيل مستخدم</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="email">الإيميل:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="password_confirmation">تأكيد كلمة المرور:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        @error('password_confirmation')
            <div class="error">{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">تسجيل</button>
    </form>
</body>
</html>
@if (session('success'))
    <div style="color: green; margin-top: 10px;">
        {{ session('success') }}
    </div>
@endif
