<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="./ticket.css">
    <title>Ticket Booking</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
          <img src="./images/ctrip.png" width="130" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Flights <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Trains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mobile</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Help
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CAD
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EN
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">App</a>
            </li>
            
          </ul>
        </div>
      </nav>  
    </header>
    
    <main role="main">
      <div class="bg flex-container">
        <div class="main-search flex-item">
          <div class="btn-group btn-group-lg btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="options" id="option1" autocomplete="off" checked> Flights
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option2" autocomplete="off"> Hotels
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option3" autocomplete="off"> Trains
            </label>
          </div>  
          <br>

          <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option1" autocomplete="off" checked> One way
            </label>
            <label class="btn btn-primary active">
              <input type="radio" name="options" id="option2" autocomplete="off"> Round trip
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option3" autocomplete="off"> Multi-City
            </label>
          </div>
          
          <form id="J_Search" target="_blank">
            <div class="row">
              <div class="col">
                <label for="inputFirst">From</label>
                <input type="text" class="form-control" id="inputFirst" placeholder="First name">
              </div>
              <div class="col">
                <label for="inputLast">To</label>
                <input type="text" class="form-control" id="inputLast" placeholder="Last name">
              </div>
            </div>

            <label class="" for="J_DepDate">Depart</label>
            <input id="J_DepDate" type="text" class="" value="" />

            <label class="" for="J_EndDate">Return</label>
            <input id="J_EndDate" type="text" class="" value="" />
        
            <label class="" for="input_adult">Adult(12+ yrs)</label>
            <input id="input_adult" type="number" name="" min="0" max="10">

            <label class="" for="input_child">Child(2-12 yrs)</label>
            <input id="input_child" type="number" name="" min="0" max="10">

            <label class="" for="input_infant">Infant(0-2 yrs)</label>
            <input id="input_infant" type="number" name="" min="0" max="10">
            
            <label class="" for="select_class">Infant(0-2 yrs)</label>
            <select id="select_class" class="custom-select">
              <option selected>Economy</option>
              <option value="1">Business</option>
              <option value="2">First Class</option>
            </select>

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Nonstop only</label>
            </div>
            <input id="J_search_btn" type="submit" class="" value="Search flights" />

          </form>
          
        </div>

        <div class="table flex-item">
          
        </div>
      </div>   
    </main>
          


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="./yui-min.js"></script>

    <script>
      YUI({
          modules: {
              'trip-calendar': {
                  fullpath: 'trip-calendar.js',
                  type    : 'js',
                  requires: ['trip-calendar-css']
              },
              'trip-calendar-css': {
                  fullpath: 'trip-calendar.css',
                  type    : 'css'
              }
          }
      }).use('trip-calendar', function(Y) {
          
          var oCal = new Y.TripCalendar({
              minDate         : new Date,     //最小时间限制
              triggerNode     : '#J_DepDate', //第一个触节点
              finalTriggerNode: '#J_EndDate'  //最后一个触发节点
          });
          
          //校验
          Y.one('#J_Search').on('submit', function(e) {
              e.halt();
              var rDate    = /^((19|2[01])\d{2})-(0?[1-9]|1[012])-(0?[1-9]|[12]\d|3[01])$/;
                  oDepDate = Y.one('#J_DepDate'),
                  oEndDate = Y.one('#J_EndDate'),
                  sDepDate = oDepDate.get('value'),
                  sEndDate = oEndDate.get('value'), 
                  aMessage = ['请选择出发日期', '请选择返程日期', '返程时间不能早于出发时间，请重新选择', '日期格式错误'],
                  iError   = -1;   
                  switch(!0) {
                      case !sDepDate:
                          oDepDate.focus();
                          iError = 0;
                          break;
                      case !rDate.test(sDepDate):
                          oDepDate.focus();
                          iError = 3;
                          break;
                      case !sEndDate:
                          oEndDate.focus();
                          iError = 1;
                          break;
                      case !rDate.test(sEndDate):
                          oEndDate.focus();
                          iError = 3;
                          break;
                      case sDepDate.replace(/-/g, '') > sEndDate.replace(/-/g, ''):
                          oEndDate.focus();
                          iError = 2;
                          break;
                  };
                  if(iError > -1) {
                      this.set('message', aMessage[iError]).showMessage();                
                  }
                  else {
                      alert('开始时间：' + sDepDate + '\n返程时间：' + sEndDate);
                  }
          }, oCal);
      });
    </script>

    <script>
    
    $(document).ready(function(){
        $('#J_search_btn').click(function(){
            // console.log($('#J_DepDate').val());
        });
    });

    </script>
  </body>
</html>