<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fleamarket</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        <img src="../../../public/image/COACHTECH_logo" alt="COACHTECHロゴ">
      </a>
      <div class="header__search">
        検索
      </div>
      <nav>
        @if (Auth::check())
        <ul class="header__nav">
          <li class="header-nav__logout">
            <form action="/logout" method="POST">
              @csrf
                <button class="header-nav__button">ログアウト</button>
            </form>
          </li>
          <li>
            <a class="header-nav__mypage" href="/mypage">マイページ</a>
          </li>
          <li>
            <a class="header-nav__sell" href="/sell">出品</a>
          </li>
        </ul>
        @endif
        @if (!Auth::check())
        <ul class="header__nav">
          <li>
            <a class="header-nav__login" href="/login">ログイン</a>
          </li=>
          <li>
            <a class="header-nav__mypage" href="/login">マイページ</a>
          </li>
          <li>
            <a class="header-nav__sell" href="/login">出品</a>
          </li>
        </ul>
        @endif
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
