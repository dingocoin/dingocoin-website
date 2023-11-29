<?php
// Network Hashrate
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://explorer.dingocoin.com/api/getnetworkhashps",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",

]);

$nethash = curl_exec($curl);
$clean_string = str_replace('"', '', $nethash);
$float_number = $clean_string;
$magahash = $float_number; 
$terahash = $magahash / 1000000000; 
$converted_hash = number_format($terahash . 3); 
$dhash = $converted_hash;
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

// Difficulty
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://explorer.dingocoin.com/api/getdifficulty",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",

]);

$net_diff = curl_exec($curl);
$clean_string = str_replace('"', '', $net_diff);
$float_number = $clean_string;
$rounded_number = round($float_number, 2);
$cdiff = number_format($rounded_number . 3);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

// Coin Supply
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://explorer.dingocoin.com/ext/getmoneysupply",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",

]);

$supply = curl_exec($curl);
$clean_string = str_replace('"', '', $supply);
$num = $clean_string;
$formatted_num = number_format($num, 0, '.', ',');
$csupply = $formatted_num;
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

// Block Height 
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://explorer.dingocoin.com/api/getblockcount",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",

]);

$bheight = curl_exec($curl);
$clean_string = str_replace('"', '', $bheight);
$num = $clean_string;
$formatted_num = number_format($num, 0, '.', ',');
$blockheight = $formatted_num;
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>
<br>
<div class="container-xxl">
    <div class="container">
        <div class="row g-3 d-flex align-items-center justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-12">
                <div class="card-net text-white click-col" style="background-image:url('/img/logos/dingocoin/projects/walletcardbg.png'); border-radius: 20px;">
                    <img class="card-img-net d-none" src="/img/logos/dingocoin/projects/walletcardbg.png" alt="">
                    <div class="card-img-overlay-net d-flex flex-column">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card-title">
                                            <img class="img-rounded" src="/img/sitemain/network.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <p></p><b>
                                            <h6 class="text-white text-center">Network (TH/s)</h6>
                                            <h6 class="text-white text-center"><?php echo $dhash ?></h6>
                                        </b>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <p></p><b>
                                            <h6 class="text-white text-center">Difficulty</h6>
                                            <h6 class="text-white text-center"><?php echo $cdiff ?></h6>
                                        </b>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <p></p><b>
                                            <h6 class="text-white text-center">Coin Supply</h6>
                                            <h6 class="text-white text-center"><?php echo $csupply ?></h6>
                                        </b>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <p></p><b>
                                            <h6 class="text-white text-center">Block Height</h6>
                                            <h6 class="text-white text-center"><?php echo $blockheight ?></h6>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>