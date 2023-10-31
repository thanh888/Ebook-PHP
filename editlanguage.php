<?php include 'include/header.php';?>
<body>
	<div class="container">
	<div class="mx-auto col-sm-12 main-section" id="myTab" role="tablist">
		<?php include 'include/child-tab.php';?>
		<div class="tab-content" id="myTabContent">	
			<div role="tabpanel">
				<div class="card">
					<div class="card-header">
						<h4>All Author</h4>
					</div>
					<div class="card-body">
						<?php
							$id = $_GET['id_language'];
							$query = "SELECT * FROM tbl_language WHERE id_language = '".$id."'";

							$ms = mysqli_query($conn, $query);
							$result = mysqli_fetch_assoc($ms);

							if (isset($_POST['submit'])) {
							
								$name = $_POST['name'];    
								$query = "UPDATE tbl_language SET name_language = '".$name."' WHERE id_language = '".$id."'";
								mysqli_query($conn, $query);

								?>
									<script>
										window.location = 'language.php';
									</script>
								<?php
								
							}
						?>
						<form class="form" role="form" method="post" action="" enctype="multipart/form-data" autocomplete="off">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Name</label>
								<div class="col-lg-9">
									<input class="form-control" name="name" value="<?php echo $result['name_language']; ?>">
								</div>
							</div>	
							<div class="form-group row">
								<div class="col-lg-12 text-center">
									<input type="submit" name="submit" class="btn btn-primary" value="Save">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>