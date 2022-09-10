<!DOCTYPE html>
<html lang="ja">
@include('head')
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">管理システム</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="サイドバーメニュー" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">サインアウト</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  ダッシュボード <span class="sr-only">(現位置)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  患者情報管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="calendar"></span>
                  予約管理
                </a>
              </li>
              <li class="nav-item site-manage">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  サイト管理
                </a>
                <div class="pull-down-list">
                  <div class="news">お知らせ</div>
                  <div class="inquiry">お問合せ</div>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">ダッシュボード</h1>
          </div>

          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        </main>
      </div>
    </div>

  <script>
    feather.replace()
  </script>

</body>

</html>