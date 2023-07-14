<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta name="UTF-8">
        <meta charset=<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>熊本のラーメン屋さん</title>
    </head>

    <body>
        <header>
            <h1><a href="#">熊本のラーメン屋さん</a></h1>
            <nav>
                <a href="mypage">管理者マイページ</a>
            </nav>
        </header>

        <main>
            <form action="{{ route('store_information.index') }}" method="post">
                @csrf

                <fieldset>
                    
                    <h1>{{Auth::id()}}</h1>

                <div>
                    <label for = "name">店名/支店名</label>
                    <br>
                    <input type="text" name="name">
                    <br>
                </div>

                <div>
                    <label for = "city">住所</label>
                    <br>
                    <select name = "city">
                        @foreach(config('const.CITY') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label for = "address1">番地</label>
                    <br>
                    <input type="text" name = "address1">
                    <br>
                </div>

                <div>
                    <label for = "address2">建物名・部屋番号</label>
                    <br>
                    <input type="text" name = "address2">
                    <br>
                </div>

                <div>
                    <label for = "price">値段</label>
                    <br>
                    <select name = "price">
                        @foreach(config('const.PRICE') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label for = "start_time">開店時間</label>
                    <br>
                    <select id="start_time" name="start_time">
                        @foreach(config('const.START_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label for = "end_time">閉店時間</label>
                    <br>
                    <select id="end_time" name="end_time">
                        @foreach(config('const.END_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label for = "rest_start_time">休憩開始時間</label>
                    <br>
                    <select id="rest_start_time" name="rest_start_time">
                        @foreach(config('const.REST_START_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label for = "rest_end_time">休憩終了時間</label>
                    <br>
                    <select id="rest_end_time" name="rest_end_time">
                        @foreach(config('const.REST_END_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label for = "store_vacation">定休日</label>
                    <br>
                    @foreach(config('const.STORE_VACATION') as $key => $value)
                        <input type="checkbox" name="store_vacation[]" value="{{ $key }}">{{ $value }}
                    @endforeach
                    <br>
                </div>

                <div>
                    <label for = "menu">メニュー</label>
                    <br>
                    <textarea name = "menu"></textarea>
                    <br>
                </div>

                <div>
                    <label for = "introduction">紹介文</label>
                    <br>
                    <textarea name = "introduction"></textarea>
                    <br>
                </div>

                <div>
                    <label for = "store_facilities">席、設備等</label>
                    <br>
                    @foreach(config('const.FACILITY') as $key => $value)
                        <input type="checkbox" name="store_facilities[]" value="{{ $key }}">{{ $value }}
                    @endforeach
                    <br>
                </div>

                <div>
                    <label for = "url">店舗サイトURL</label>
                    <br>
                    <input type="text" name = "url">
                    <br>
                </div>

                <div>
                    <label for = "tel">電話番号</label>
                    <br>
                    <input type="text" name = "tel">
                    <br>
                </div>

                <div>
                    <label for = "store_images">画像</label>
                    <br>
                    <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="store_images">
                        <button>アップロード</button>
                    </form>
                    <br>
                </div>
                <button type="submit" class="btn btn-success">
                        {{ __('変更') }}
                </button>

                </fieldset>
            </form>
        </main>
    </body>
</html>