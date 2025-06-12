
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="stylebuy.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
        <nav class="navbar">
            <div class="container justify-content-center ">
                <a href="index.php"style="color :rgba(255, 255, 255, 0)"><img src="img/Primebyte logo1.png"  class="logo" alt="โลโก้" width="200" height="80;" class="center" style="backdrop-filter: blur(0px);"> </a>
            </div>
        </nav>      
            <nav class="navbar navbar-expand-lg bg-opacity-75 top-0 start-0 w-100 justify-content-center" style="z-index:100;backdrop-filter: blur(7px);">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="color :#ffffff"></a>

                    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item me-3">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="ค้นหาสินค้า" aria-label ="Search"/>
                                    <button class="btn btn-none halo-effect" type="submit"><i class="fa-solid fa-magnifying-glass fa-beat-fade" style="color: #ffffff;"></i></button>
                                </form>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link halo-effect" href="buy.php" style="color : #ffffff">สินค้าทั้งหมด</a>
                            </li>
                            <li class="nav-item me-3">
                                </li>
                            <li class="nav-item dropdown me-3">
                                <button class="btn btn-none dropdown-toggle halo-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : #ffffff">ประเภทอุปกรณ์</button>
                                <ul class="dropdown-menu">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <li><a class="dropdown-item" href="#">• จอภาพ (Monitor)</a></li>
                                                <li><a class="dropdown-item" href="#">• เคส (Case)</a></li>
                                                <li><a class="dropdown-item" href="#">• พาวเวอร์ซัพพลาย (Power Supply)</a></li>
                                                <li><a class="dropdown-item" href="#">• คีย์บอร์ด (Keyboard)</a></li>
                                                <li><a class="dropdown-item" href="#">• เมาส์ (Mouse)</a></li>
                                                <li><a class="dropdown-item" href="#">• เมนบอร์ด (Main board)</a></li>
                                                <li><a class="dropdown-item" href="#">• ซีพียู (CPU)</a></li>
                                                <li><a class="dropdown-item" href="#">• การ์ดแสดงผล (Display Card)</a></li>
                                                <li><a class="dropdown-item" href="#">• แรม (RAM)</a></li>
                                                <li><a class="dropdown-item" href="#">• ฮาร์ดดิสก์ (Hard disk)</a></li>

                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link halo-effect" href="#" data-target="text4" style="color : #ffffff">คอมประกอบ</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link halo-effect" href="#" data-target="text3" style="color : #ffffff">โปรโมชั่นพิเศษ</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link halo-effect" href="#" data-target="text5" style="color : #ffffff">ตำแหน่งที่ตั้ง</a>
                            </li>
                            <li class="nav-item dropdown">
                                <button class="btn btn-none dropdown-toggle halo-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : #ffffff">ชื่อผู้ใช้งาน <?=$_SESSION["login_fistname"]?></button>
                                <ul class="dropdown-menu dropdown-menu-nones">
                                    <li><a class="dropdown-item" href="#">สลับบัญชี</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br>
            <div class="text-center">
            <h3>โปรโมชั่นสุดพิเศษ!!!</h3>
            </div>
<div class="container-fluid px-10">
    <div class="row row-cols-4 row-cols-md-6 g-3">
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="sidebar-menu">
  <ul class="menu">
    <li class="menu-item" onmouseover="showSubmenu(this)" onmouseout="hideSubmenu(this)">
      <span>• จอภาพ (Monitor)</span>
      <div class="submenu">
  <div class="container-fluid px-3">
    <div class="row row-cols-2 row-cols-md-5 g-3">
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/1/MONITOR 23.8'' ASUS PROART PA24ACRV (IPS, DP, HDMI, USB-C, SPK) 2K 75Hz.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">MONITOR 23.8'' ASUS PROART PA24ACRV (IPS, DP, HDMI, USB-C, SPK) 2K 75Hz</h6>
            <br>
            <p class="card-text small">IPS / 1920 x 1080 / 1000:1 / 250cd:m2 / 5ms / 120Hz / 72 NTSC / 16.7 Million / Aspect Ratio</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 11,990.-
            </button>
          </div>
        </div>
      </div>
       <div class="col">
        <div class="card h-100 text-center">
          <img src="img/จอ/MONITOR 21.5'' DAHUA LM22-A200Y (VA, VGA, HDMI) 100Hz.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">MONITOR 21.5'' DAHUA LM22-A200Y (VA, VGA, HDMI) 100Hz</h6>
            <br>
            <br>
            <p class="card-text small">VA / 1,920 x 1,080 / 3000:1 / 250cd:m2 / 10 ms / 100Hz / 16.7 Million / Aspect Ratio</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 1,900.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/จอ/MONITOR 21.45'' MSI PRO MP223 E2 (VA, HDMI, DP) 100Hz.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">MONITOR 21.45'' MSI PRO MP223 E2 (VA, HDMI, DP) 100Hz</h6>
            <br>
            <br>
            <p class="card-text small">VA / 1920 x 1080 / CR 3000:1 / 250cd:m2 / 1ms / 100Hz / 99% sRGB / 16.7 Million / Aspect Ratio</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 2,050.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/จอ/MONITOR 24'' SAMSUNG LS24F320GAEXXT (IPS, HDMI) 120Hz.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">MONITOR 24'' SAMSUNG LS24F320GAEXXT (IPS, HDMI) 120Hz</h6>
            <br>
            <p class="card-text small">PS / 1920 x 1080 / 1000:1 / 250cd:m2 / 5ms / 120Hz / 72 NTSC / 16.7 Million / Aspect Ratio 16:9</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 2,990.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="img/CPU AMD AM4 RYZEN 5 5600GT.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">RYZEN 5 5600GT</h6>
            <p class="card-text small">6C/12T • 3.6-4.6GHz</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary">
              <i class="fa-solid fa-cart-shopping fa-beat-fade"></i> 4,390.-
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </li>
    <li class="menu-item"><span>• เคส (Case)</span></li>
    <li class="menu-item"><span>• พาวเวอร์ซัพพลาย (Power Supply)</span></li>
    <li class="menu-item"><span>• คีย์บอร์ด (Keyboard)</span></li>
    <li class="menu-item"><span>• เมาส์ (Mouse)</span></li>
    <li class="menu-item"><span>• เมนบอร์ด (Main board)</span></li>
    <li class="menu-item"><span>• ซีพียู (CPU)</span></li>
    <li class="menu-item"><span>• การ์ดแสดงผล (Display Card)</span></li>
    <li class="menu-item"><span>• แรม (RAM)</span></li>
    </ul>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

function toggleMenu(menuId) {
  const submenus = document.querySelectorAll('.submenu');
  submenus.forEach(menu => menu.style.display = 'none');
  const target = document.getElementById(`submenu-${menuId}`);
  if (target) {
    target.style.display = 'block';
  }
}
</script>



    
</body>
</html>
