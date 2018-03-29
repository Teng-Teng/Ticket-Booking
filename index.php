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
      <div class="background-image">
        <div class="main-search">
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
                <label for="from">From</label>
                <input type="text" class="form-control" id="from" placeholder="City of airport">
              </div>
              <div class="col">
                <label for="to">To</label>
                <input type="text" class="form-control" id="to" placeholder="City or airport">
              </div>
            </div>

            <label class="" for="J_DepDate">Depart</label>
            <input id="J_DepDate" type="text" class="" value="" />

            <label class="" for="J_EndDate">Return</label>
            <input id="J_EndDate" type="text" class="" value="" />
        
            <label class="" for="adult">Adult(12+ yrs)</label>
            <input id="adult" type="number" name="" min="0" max="10">

            <label class="" for="child">Child(2-12 yrs)</label>
            <input id="child" type="number" name="" min="0" max="10">
            
            <label class="" for="select_class">Class</label>
            <select id="select_class" class="custom-select">
              <option value="Economy" selected>Economy</option>
              <option value="Business">Business</option>
              <option value="First Class">First Class</option>
            </select>

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck">
              <label class="custom-control-label" for="customCheck">Nonstop only</label>
            </div>

            <input id="J_search_btn" type="submit" class="" value="Search flights" />

          </form>
          
        </div>

        <div class="table-ticket">
          <?php 
            require_once('database.php');

            $db = new Database();
            $all_tickets = $db->getAllTickets();

          ?>
          
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Flight</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Depart</th>
                <th scope="col">Return</th>
                <th scope="col">Adult</th>
                <th scope="col">Child</th>
                <th scope="col">Class</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach($all_tickets as $key => $ticket) {
                  echo '<tr id="' . $ticket['id'] .'">';
                  echo '<th scope="row">' . $ticket['id'] .'</th>';
                  echo  '<td>' . $ticket['Origin'] . '</td>';
                  echo  '<td>' . $ticket['Destination'] . '</td>';
                  echo  '<td>' . $ticket['DepartDate'] . '</td>';
                  echo  '<td>' . $ticket['ReturnDate'] . '</td>';
                  echo  '<td>' . $ticket['Adult'] . '</td>';
                  echo  '<td>' . $ticket['Child'] . '</td>';
                  echo  '<td>' . $ticket['Class'] . '</td>';
                  echo  '<td>' . '<button onclick="deleteTicket(\'' . $ticket['id'] . '\')">Delete</button>' . '</td>';
                  echo '</tr>';
                }             

              ?>
            </tbody>
          </table>

          <div class="info"></div>
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
                      // alert('开始时间：' + sDepDate + '\n返程时间：' + sEndDate);
                  }
          }, oCal);
      });
    </script>

    <script>
      
      $(document).ready(function(){
        $('#J_search_btn').click(function(){
          var from = $('#from').val();
          var to = $('#to').val();
          var departDate = $('#J_DepDate').val();
          var returnDate = $('#J_EndDate').val();
          var adult = $('#adult').val();
          var child = $('#child').val();
          var flightClass = $('#select_class').val();

          $.post(
            "http://192.168.33.10/Ticket Booking/insert.php",
            {
              "insert_from": from,
              "insert_to": to,
              "insert_departDate": departDate,
              "insert_returnDate": returnDate,
              "insert_adult": adult,
              "insert_child": child,
              "insert_flightClass": flightClass
            },
            function(data) {
              if(data.message == 'Insert successfully') {

                var id = $('tbody').children("tr:last-child").attr('id');
                id++;
                var insert = '<tr id="' + id + '">'+
                      '<th scope="row">' + id + '</th>' +
                      '<td>' + from + '</td>' +
                      '<td>' + to + '</td>' +
                      '<td>' + departDate + '</td>' +
                      '<td>' + returnDate + '</td>' +
                      '<td>' + adult + '</td>' +
                      '<td>' + child + '</td>' +
                      '<td>' + flightClass + '</td>' +
                      '<td>' + '<button onclick="deleteTicket(\'' + id + '\')">Delete</button>' + '</td>' +
                      '</tr>';
                $('tbody').append(insert);
                
                $('.info').html(data.message);
              } else {
                $('.info').html(data.message);
              }
            },
            "json"
          ); 

        });
      });


      function deleteTicket(id) {
        //ajax to connect backend
        $.post(
          "http://192.168.33.10/Ticket Booking/delete.php",
          {
            "delete_id": id
          },
          function(data) {
            // console.log(data.message);
            $('.info').html(data.message);
            $('#' + id).hide();
          },
          "json"
        );
      }
    </script>
  </body>
</html>