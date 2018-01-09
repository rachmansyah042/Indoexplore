    function lihattrip() {



    $.ajax({
        url:'http://yippytech.com:3000/home',
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
            data.forEach(function(obj){
                destinasi+='<div class="col-md-55">'
                        '<div class="thumbnail">'
                          '<div class="image view view-first">'
                            <img style="width: 100%; display: block;" src="{{ asset('/gantella/indoexplore/images/media.jpg') }}" alt="image" />
                            <div class="mask">
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Babakan Lebak River Tube</p>
                          </div>
                        </div>
                      </div>
            });
            $("#lihattrip").html(destinasi);
        }
    });
}

lihattrip();

