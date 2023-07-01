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
            <form action="{{ ('admin.index') }}" method="post">
                @csrf
                <div>
                    <label>店名/支店名</label>
                    <br>
                    <input type="text" name="shop_name">
                    <br>
                </div>
                <button type="submit" class="btn btn-success">
                        {{ __('変更') }}
                </button>
                <!-- <fieldset>

                <div>
                    <label>店名/支店名</label>
                    <br>
                    <input type="text" name="shop_name">
                    <br>
                </div>

                <div>
                    <label>住所</label>
                    <br>
                    <select>
                        <option>熊本市中央区</option>
                        <option>熊本市東区</option>
                        <option>熊本市西区</option>
                        <option>熊本市南区</option>
                        <option>熊本市北区</option>
                        <option>八代市</option>
                        <option>人吉市</option>
                        <option>荒尾市</option>
                        <option>水俣市</option>
                        <option>玉名市</option>
                        <option>天草市</option>
                        <option>山鹿市</option>
                        <option>菊池市</option>
                        <option>宇土市</option>
                        <option>上天草市</option>
                        <option>宇城市</option>
                        <option>阿蘇市</option>
                        <option>合志市</option>
                        <option>美里町</option>
                        <option>玉東町</option>
                        <option>和水町</option>
                        <option>南関町</option>
                        <option>長洲町</option>
                        <option>大津町</option>
                        <option>菊陽町</option>
                        <option>南小国町</option>
                        <option>小国町</option>
                        <option>産山村</option>
                        <option>高森町</option>
                        <option>南阿蘇村</option>
                        <option>西原村</option>
                        <option>御船町</option>
                        <option>嘉島町</option>
                        <option>益城町</option>
                        <option>甲佐町</option>
                        <option>山都町</option>
                        <option>氷川町</option>
                        <option>芦北町</option>
                        <option>津奈木町</option>
                        <option>錦町</option>
                        <option>あさぎり町</option>
                        <option>多良木町</option>
                        <option>湯前町</option>
                        <option>水上町</option>
                        <option>相良村</option>
                        <option>五木村</option>
                        <option>山江村</option>
                        <option>球磨村</option>
                        <option>芦北町</option>
                    </select>
                    <br>
                </div>

                <div>
                    <label>番地</label>
                    <br>
                    <input type="text">
                    <br>
                </div>

                <div>
                    <label>建物名・部屋番号</label>
                    <br>
                    <input type="text">
                    <br>
                </div>

                <div>
                    <label>値段</label>
                    <br>
                    <select>
                        @foreach(config('const.PRICE_LIST') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label>開店時間</label>
                    <br>
                    <select id="start_time" name="start_time">
                        @foreach(config('const.START_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label>閉店時間</label>
                    <br>
                    <select id="end_time" name="end_time">
                        @foreach(config('const.END_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label>休憩開始時間</label>
                    <br>
                    <select id="rest_start_time" name="rest_start_time">
                        @foreach(config('const.REST_START_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label>休憩終了時間</label>
                    <br>
                    <select id="rest_end_time" name="rest_end_time">
                        @foreach(config('const.REST_END_TIME') as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div>
                    <label>定休日</label>
                    <br>
                    @foreach(config('const.STORE_VACATION') as $key => $value)
                        <input type="checkbox" name="store_vacation[]" value="{{ $key }}">{{ $value }}
                    @endforeach
                    <br>
                </div>
                
                <div>
                    <label>メニュー</label>
                    <br>
                    <textarea></textarea>
                    <br>
                </div>

                <div>
                    <label>紹介文</label>
                    <br>
                    <textarea></textarea>
                    <br>
                </div>

                <div>
                    <label>席、設備等</label>
                    <br>
                    @foreach(config('const.FACILITY') as $key => $value)
                        <input type="checkbox" name="store_facilities[]" value="{{ $key }}">{{ $value }}
                    @endforeach
                    <br>
                </div>

                <div>
                    <label>店舗サイトURL</label>
                    <br>
                    <input type="text">
                    <br>
                </div>

                <div>
                    <label>電話番号</label>
                    <br>
                    <input type="text">
                    <br>
                </div>

                <div>
                    <label>画像</label>
                    <br>
                    <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <button>アップロード</button>
                    </form>
                    <br>
                </div>

                <div>
                    <button type="">予約する</button>
                    <br>
                </div>

                    <button type="submit" class="btn btn-success">
                        {{ __('変更') }}
                    </button>
                </fieldset> -->
            </form>
        </main>
    </body>
</html>