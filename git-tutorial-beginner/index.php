
<!doctype html>

<html>
<head>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <meta name="theme-color" content="#4F7DC9">
  <meta charset="UTF-8">
  <title>GIT TUTORIAL FOR BEGINNER</title>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Code+Pro:400|Roboto:400,300,400italic,500,700|Roboto+Mono">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../css/codelab-elements.css">
  <style>
    .success {
      color: #1e8e3e;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <google-codelab-analytics gaid="UA-49880327-14"></google-codelab-analytics>
  <google-codelab codelab-gaid=""
                  id="git-tutorial-beginner"
                  title="GIT TUTORIAL FOR BEGINNER"
                  environment="web"
                  feedback-link="https://github.com/Thanhvp/ebook">
    
      <google-codelab-step label="Giới thiệu" duration="5">
        <p>GIT là một hệ thống quản lý phiên bản phân tán (Distributed Version Control System – DVCS) ra đời vào năm 2005 và hiện được dùng rất phổ biến. So với các hệ thống quản lý phiên bản tập trung khi tất cả mã nguồn và lịch sử thay đổi chỉ được lưu một nơi là máy chủ thì trong hệ thống phân tán, các máy khách không chỉ &#34;check out&#34; phiên bản mới nhất của các tập tin mà là sao chép (mirror) toàn bộ kho mã nguồn (repository). Như vậy, nếu như máy chủ ngừng hoạt động, thì bạn hoàn toàn có thể lấy kho chứa từ bất kỳ máy khách nào để sao chép ngược trở lại máy chủ để khôi phục lại toàn bộ hệ thống. Mỗi checkout thực sự là một bản sao đầy đủ của tất cả dữ liệu của kho chứa từ máy chủ. </p>
<p class="image-container"><img alt="git_overview" src="img/381682db2fbdac0e.jpg"></p>
<p>Git sẽ giúp bạn:</p>
<p>✅ Quản lý các phiên bản khác nhau của mã nguồn</p>
<p>✅ So sánh giữa các phiên bản</p>
<p>✅ Phối hợp làm việc nhóm</p>
<p>✅ Theo dõi, quản lý các thành viên tham gia</p>
<p>✅ Thử nghiệm tính năng, nâng cấp mà không sợ bị ảnh hưởng</p>


      </google-codelab-step>
    
      <google-codelab-step label="Cài đặt Git" duration="5">
        <h2 is-upgraded>Window</h2>
<p>Trên máy tính HĐH Window, các bạn có thể tải và cài đặt git tại <a href="https://git-scm.com/download/win" target="_blank">https://git-scm.com/download/win</a></p>
<h2 is-upgraded>Linux</h2>
<p>Trên máy tính HĐH Linux, làm theo hướng dẫn tại <a href="https://git-scm.com/download/linux" target="_blank">https://git-scm.com/download/linux</a></p>
<h2 is-upgraded>Kiểm tra</h2>
<p>Mở CMD (window) hoặc terminal (Linux) và đánh lệnh kiểm tra để biết cài đặt thành công</p>
<p><code>git --version</code></p>


      </google-codelab-step>
    
      <google-codelab-step label="Đăng ký tài khoản Git host" duration="5">
        <p>Hiện nay Github và Gitlab là 2 dịch vụ cung cấp git hosting miễn phí được nhiều người sử dụng. Các bạn đăng ký tại:</p>
<ol type="1">
<li>Github <a href="https://github.com/" target="_blank">https://github.com/</a></li>
<li>Gitlab <a href="https://about.gitlab.com/" target="_blank">https://about.gitlab.com/</a></li>
</ol>


      </google-codelab-step>
    
      <google-codelab-step label="Tạo Token" duration="0">
        <aside class="special"><p>Token có thể hiểu là một loại password dùng để xác thực đăng nhập.</p>
</aside>
<h2 is-upgraded>Github</h2>
<p>👉 Setting 👉 Developer Setting 👉 Personal access tokens 👉 Generate new token</p>
<p>👉 Điền thông tin 👉 thời hạn sử dụng 👉 chọn phân quyền 👉 Generate token</p>
<h2 is-upgraded>Gitlab</h2>
<p>👉 Preferences 👉 Access Token 👉</p>
<p>👉 Điền thông tin 👉 thời hạn sử dụng 👉 chọn phân quyền 👉 Create personal access token</p>
<aside class="warning"><p>Sau khi khởi tạo Token, bạn phải copy và lưu giữ chuỗi ký tự token cẩn thận để sử dụng.</p>
</aside>


      </google-codelab-step>
    
      <google-codelab-step label="Khởi tạo repository" duration="5">
        <h2 is-upgraded>Repository là gì?</h2>
<p>Repository hay còn gọi là Repo, dịch ra tiếng Việt có nghĩa là kho chứa code. Có 02 loại repository đó là local repository và remote repository.</p>
<ul>
<li>Local repository: Là repo được cài đặt trên máy tính của lập trình viên, repo này sẽ đồng bộ hóa với remote repo bằng các lệnh của git.</li>
<li>Remote repository: Là repo được cài đặt trên host, ví dụ Github hoặc Gitlab hoặc có thể tự host trên server.</li>
</ul>
<p class="image-container"><img alt="git_repo" src="img/7ebd527bb1d5884f.jpg"></p>
<h2 is-upgraded>Tạo repo trên Github</h2>
<h2 is-upgraded>Tạo repo trên Gitlab</h2>


      </google-codelab-step>
    
      <google-codelab-step label="Các lệnh Git cơ bản" duration="5">
        <aside class="warning"><p>Trước khi bắt đầu, bạn nên tạo 1 thư mục trống để thực hành.</p>
</aside>
<h2 is-upgraded>Clone</h2>
<p>Lệnh clone dùng để tạo local repo trên máy tính</p>
<p class="image-container"><img alt="git_clone" src="img/c02109399d779913.jpg"></p>
<ol type="1">
<li>Clone từ github</li>
</ol>
<p><code>git clone https://{Tên tài khoản}:{Token}@github.com/Thanhvp/{tên repo}</code></p>
<ol type="1">
<li>Clone từ gitlab</li>
</ol>
<p><code>git clone https://{Tên tài khoản}:{Token}@gitlab.com/daithanhbk/{tên repo}.git</code></p>
<p>Sau khi clone, 1 thư mục làm việc sẽ được tải về máy tính. Bạn có truy cập vào thư mục để bắt đầu làm việc.</p>
<p><code>cd {tên thư mục}</code></p>
<h2 is-upgraded>Quy trình Git cơ bản</h2>
<p class="image-container"><img alt="git_flow" src="img/9f01b40352bfcf98.jpg"></p>
<h2 is-upgraded>Status</h2>
<p>Xem trạng thái hiện tại, đang ở nhánh nào, có những file nào đang bị thay đổi, thêm, sửa, xóa...</p>
<p><code>git status</code></p>
<h2 is-upgraded>Add</h2>
<p>Lưu thông tin chuẩn bị commit.</p>
<p><code>git add {tên file}</code></p>
<p>Trong trường hợp muốn add tất cả.</p>
<p><code>git add .</code></p>
<h2 is-upgraded>Commit</h2>
<p>Lưu lại các thay đổi</p>
<p><code>git commit -m "ghi chú"</code></p>
<h2 is-upgraded>Push</h2>
<p>Lưu commit tại remote repo</p>
<p><code>git push origin</code></p>
<h2 is-upgraded>Pull</h2>
<p>lấy dữ liệu từ remote repo để Cập nhật local repo.</p>
<ol type="1">
<li>Cập nhật 1 nhánh</li>
</ol>
<p><code>git pull origin <tên nhánh></code></p>
<ol type="1">
<li>Cập nhật tất cả</li>
</ol>
<p><code>git pull origin</code></p>


      </google-codelab-step>
    
      <google-codelab-step label="Nhánh (Branch)" duration="5">
        

      </google-codelab-step>
    
  </google-codelab>

  <script src="https://storage.googleapis.com/codelab-elements/native-shim.js"></script>
  <script src="https://storage.googleapis.com/codelab-elements/custom-elements.min.js"></script>
  <script src="https://storage.googleapis.com/codelab-elements/prettify.js"></script>
  <script src="https://storage.googleapis.com/codelab-elements/codelab-elements.js"></script>
  <script src="//support.google.com/inapp/api.js"></script>

</body>
</html>
