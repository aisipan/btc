<!DOCTYPE html>
<html>
<head>
	<title>BTC - Query Filter Export</title>

	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="font-awesome.min.css"> -->

	<!-- Datatables -->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"> -->

	<link rel="stylesheet" type="text/css" href="btc.css">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="/">JIPONHOPE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
         <!--  <ul class="nav navbar-nav navbar-right">
          
            <li>
              <a href="#" data-toggle="modal" data-target="#SigninModal" role="button">
                Sign in 
              </a>
            </li>
            
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="wrap">
    	<div class="container">
    		<div class="page-header">
			  	<h2>BTC Table</h2>
			  	<span class="reload-button">
					<!-- <button class="btn btn-success" id="reload"><i class="fa fa-refresh"></i></button> -->
					<button class="btn btn-success" id="reload">Reload</button>
				</span>
			</div>
	    	<div class="row" id="table-header">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<h3>Currency</h3>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<h3>Coinexchange</h3>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<h3>Cryptopia</h3>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			BITB
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="BITB_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="BITB_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			BITG
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="BITG_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="BITG_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			DGB
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="DGB_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="DGB_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			DNR
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="DNR_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="DNR_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			GBX
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="GBX_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="GBX_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			KMD
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="KMD_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="KMD_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			NLC2
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="NLC2_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="NLC2_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			UNIT
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="UNIT_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="UNIT_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			XMCC
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="XMCC_CE" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    		<div class="col-md-4 col-sm-4 col-xs-4">
	    			<table id="XMCC_CO" class="table" style="width: 100%">
				        <!-- append here -->
				    </table>
	    		</div>
	    	</div>
	    </div>
    </div>

    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <script type="text/javascript" src="jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="bootstrap.min.js"></script>

	<!-- Datatables -->
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script> -->

	<script type="text/javascript" src="btc.js"></script>
</body>
</html>