          <!-- Footer -->
          <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Nguyễn Tiến Đạt, Trần Đức Đại, Trần Duy Khánh</span>
                  </div>
              </div>
          </footer>
          <!-- End of Footer -->

          </div>
          <!-- End of Content Wrapper -->

          </div>
          <!-- End of Page Wrapper -->

          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
          </a>

          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn đăng xuất?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn sẵn sàng kết thúc phiên hiện tại của mình.</div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                          <a class="btn btn-primary" href="?act=dangxuat">Đăng xuất</a>
                      </div>
                  </div>
              </div>
          </div>


          <!-- Bootstrap core JavaScript-->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <!-- Core plugin JavaScript-->
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

          <!-- Custom scripts for all pages-->
          <script src="js/sb-admin-2.min.js"></script>
          <script src="js/sb-admin-2.js"></script>


          <!-- Page level plugins -->
          <script src="vendor/chart.js/Chart.min.js"></script>
          <script src="vendor/datatables/jquery.dataTables.min.js"></script>
          <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

          <!-- Page level custom scripts -->
          <script src="js/demo/chart-area-demo.js"></script>
          <script src="js/demo/chart-pie-demo.js"></script>
          <script src="js/demo/datatables-demo.js"></script>
          <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
          <script src="https://kit.fontawesome.com/83a06a9f9f.js" crossorigin="anonymous"></script>
          <script>
              const fileInputs = document.querySelectorAll('.custom-file-input');
              const labels = document.querySelectorAll('.custom-file-label');

              fileInputs.forEach((input, index) => {
                  input.addEventListener('change', (event) => {
                      const fileName = event.target.files[0].name;
                      const label = labels[index];
                      label.textContent = fileName;
                  });
              });

              function showPassword() {
                  var passwordInput = document.getElementById("validationCustomPass");
                  if (passwordInput.type === "password") {
                      passwordInput.type = "text";
                  } else {
                      passwordInput.type = "password";
                  }
              }
          </script>
          </body>

          </html>