
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutor Raya</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link href="../css/style.css" rel="stylesheet"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
  @if (session('save'))
            <script>alert("Success");</script>
        @endif
        @if (session('error'))
            <script>alert("Failed");</script>
        @endif
    <!-- Top navigation bar -->
        <div class="w3-bar w3-black w3-padding-16" id="navBar">
          <a href="{{ url('/')}}" class="w3-bar-item w3-button w3-wide"> <b>Tutor Raya</b></a>
          <!-- Right-sided navbar links -->
          <div class="w3-right ">
            <a href="{{ url('logout')}}" class="w3-bar-item w3-button">LOGOUT</a>
          </div>
        </div>

        <div class ="w3-header w3-center w3-margin-top w3-padding w3-animate-opacity">
        <img src='../images/header_course.png' alt='' style='width:100%;'>
        </div>  

        <div>
            <h2 class="w3-center">Subjects</h2>
        </div>

        <div class="w3-center">
        <button class="w3-button w3-black w3-round-xxlarge" onclick="document.getElementById('insertsubject').style.display= 'block';return false;">
                    Add New Subject
        </button>
        <div class="w3-padding">
                <table class="w3-table w3-striped w3-bordered">
                <thead class="w3-black">
                    <th>ID</th>
                    <th>Subject Title</th>
                    <th>Description</th>
                    <th>Price (RM) </th>      
                    <th>Total Learning Hours</th>
                </thead>
                @foreach ($subjectAdded as $subj)
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td> -->
                    <td>{{ $subj->id}}</td>
                    <td>{{ $subj->subject_title}}</td>
                    <td>{{ $subj->subject_description}}</td>
                    <td>{{ $subj->subject_price}}</td>
                    <td>{{ $subj->subject_hours}}</td>
                </tr>
                @endforeach
                </table>
</div>
        </div>

            <div id="insertsubject" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-round" style="width:500px">
                <header class="w3-row w3-black"> <span onclick="document.getElementById('insertsubject').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                    <h4 class="w3-center">Insert New Subject</h4>
                </header>



                <div class="w3-padding">
                <form action="{{ route('insertsubject') }}" method="post">
                    {{csrf_field()}}
                    <p>
                        <label><b>Subject ID</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="text" name="subjectid" id="idsubjectid"
                            placeholder="Enter subject ID" required>
                    </p>
                    <p>
                        <label><b>Title</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="text" name="title" id="idtitle"
                            placeholder="Enter subject title" required>
                    </p>
                    <p>
                        <label><b>Description</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="text" name="description" id="iddescription"
                            placeholder="Enter subject description" required>
                    </p>
                    <p>
                        <label><b>Price</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="text" name="price" id="idprice"
                            placeholder="Enter subject price" required>
                    </p>
                    <p>
                        <label><b>Total Learning Hours</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="text" name="totallearninghour" id="idtotallearninghour"
                            placeholder="Enter subject total learning hour" required>
                    </p>
                    <p>
                        <input type="submit" class="w3-btn w3-round-xxlarge w3-block w3-black" name="Insert Subject"">
                    </p>
                </form>
                </div>
            </div>
        </div>



  </body>
</html>
