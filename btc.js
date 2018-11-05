$(document).ready(function() {
	
	var coine_links = {
		'BITB' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=122',
		'BITG' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=731',
		'BTX' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=763',
		'DGB' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=150',
		'DNR' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=371',
		'GBX' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=642',
		'KMD' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=231',
		'NLC2' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=395',
		'UNIT' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=305',
		'XMCC' : 'https://www.coinexchange.io/api/v1/getmarketsummary?market_id=520'
	};

	var crypto_links = {
		'BITB' : 'https://www.cryptopia.co.nz/api/GetMarket/BITB_BTC',
		'BITG' : 'https://www.cryptopia.co.nz/api/GetMarket/BITG_BTC',
		'BTX' : 'https://www.cryptopia.co.nz/api/GetMarket/BTX_BTC',
		'DGB' : 'https://www.cryptopia.co.nz/api/GetMarket/DGB_BTC',
		'DNR' : 'https://www.cryptopia.co.nz/api/GetMarket/DNR_BTC',
		'GBX' : 'https://www.cryptopia.co.nz/api/GetMarket/GBX_BTC',
		'KMD' : 'https://www.cryptopia.co.nz/api/GetMarket/KMD_BTC',
		'NLC2' : 'https://www.cryptopia.co.nz/api/GetMarket/NLC2_BTC',
		'UNIT' : 'https://www.cryptopia.co.nz/api/GetMarket/UNIT_BTC',
		'XMCC' : 'https://www.cryptopia.co.nz/api/GetMarket/XMCC_BTC'
	}

	$.each(coine_links, function(keytb, val) {
		$.getJSON(val, function(data){
			// console.log(data.result);
			var res = data.result;
			$("#"+keytb+"_CE").empty();
			$.each(res, function(key, val) {
				$("#"+keytb+"_CE").append(`
					<tr>
			        	<td><b>`+key+`</b></td>
			        	<td>`+val+`</td>
			        </tr>
				`);
			});
		});
	});


	$.each(crypto_links, function(keytb, val) {
		$.getJSON(val, function(data){
			// console.log(data.result);
			var Data = data.Data;
			if (Data == null) {
				$("#"+keytb+"_CO").empty();
				$("#"+keytb+"_CO").append(`
					<tr>
			        	<td><b>Error</b></td>
			        	<td>`+data.Error+`</td>
			        </tr>
				`);
			} 
			else {
				$("#"+keytb+"_CO").empty();
				$.each(Data, function(key, val) {
					$("#"+keytb+"_CO").append(`
						<tr>
				        	<td><b>`+key+`</b></td>
				        	<td>`+val+`</td>
				        </tr>
					`);
				});
			}
		});
	});

	$("#reload").click(function(){
		// $('.wrap').load();
		location.reload();

	})

	



    // $('#bitc_ce').DataTable({
    // 	// dom: 'Bfrtip',
	   //  // buttons: [
	   //  //     'copy', 'csv', 'excel', 'pdf', 'print'
	   //  // ],
	   //  // ajax:           '/api/data',
	   //  scrollY:        300,
	   //  scrollX: 		true, 
	   //  deferRender:    true,
	   //  scroller:       true
    // });
} );