<html>
<head>
<title> SIPK </title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/plugins/owl.carousel.css');?>">
<!--<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/plugins/owl.theme.default.css');?>">-->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
<style>
.table{
	border:1px solid #006699;
	border-radius:10px;
	box-shadow:0px 5px 5px 5px #000000;
	background-color:white;
}
.tr{
		
}

.td{
		
}

#nav{
	list-style:none;
	background-color:#16a085;
	margin:0px;
	padding:0px;
	float:left;
	
}
#nav li{
	margin:0px;
	padding:0px;
	float:left;
	text-align:center;
}
#nav li a{
	display:block;
	padding: 0 5px;
	border-right:1px solid #000;
	line-height:2.5;
	float:left;
	width:120px;
	text-decoration:none;
	font-family:calibri;
	font-size:18px;
    color:#fff;
}
#nav li a:hover{
	background-color:#1abc9c;
	color:white;	
}

.kanan{
	border-left:1px solid black;
}

input,button{
	padding:10px;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <table width="800px" align="center" border=0 class="table">

            <tr>
                <td height="200px" colspan="2"><img src="<?= base_url()."img/smart-center-logo.jpg"?>" width=800 height=200></td>
            </tr>	

            <tr>
                <td colspan="2" height="30px" bgcolor="#16a085"> 
                <ul id="nav">
                <li><a href="<?= base_url();?>">Home</a></li>
                <li><a href="profile">Program</a></li>
                <li><a href="layanan">Lokasi</a></li>
                <li><a href="about">Biaya &amp; Jadwal</a></li>
                <li><a href="daftar">Pendaftaran</a></li>
                <li><a href="admin">Login</a></li>
                </ul>
                </td>
            </tr>	
            <tr>
                <td width="800px" height="600" valign="top" align="justify"> <?php include(FCPATH."application\\views\isi.php");?></td> 
            </tr>	
            
            
            <tr>
                <td colspan="2" height="30px" bgcolor="#16a085" align="center"> copyright &copy; by Arif Nur Hakim  </td>
            </tr>

        </table>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/owl.carousel.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });
</script>
</body>
</html>