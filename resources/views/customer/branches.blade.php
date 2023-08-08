@extends('layout.app')

@section('seo')
    <title>Contact</title>
@endsection

@section('content')
    <div id="branch">
        <nav class="breadcrumb">
            <a href="{{ route('customer.home') }}" class="d-flex align-items-center text-muted">
                <i class="fa-solid fa-house"></i>
                <p class="px-2">Home</p>
            </a>
            <i class="fa-solid fa-chevron-right text-muted"></i>
            <p class="px-2 text-muted">Hệ thống cửa hàng</p>
        </nav>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h4>HỆ THỐNG CỬA HÀNG</h4>
                    <P>Nhập vị trí và chúng tôi sẽ hiển thị cho quý khách cửa hàng gần nhất.</P>
                    <div class="address d-flex">
                        <div class="w-50 my-4">
                            <span>Chọn tỉnh thành </span>
                            <select id="select-area" class="form-control select2">
                                <option value="">Tất cả tỉnh thành</option>
                                <option value="option1">Bình Dương</option>
                                <option value="option2">Hồ Chí Minh</option>
                                <option value="option3">Hà Nội</option>
                            </select>
                        </div>
                        <div class="w-50 mx-2 my-4">
                            <span>Chọn huyện </span>
                            <select id="select-district" class="form-control select2">
                                <option value="">Tất cả quận huyện</option>
                                <option value="option1">Quận Tân Bình</option>
                                <option value="option2">Quận 1</option>
                                <option value="option3">Quận 2</option>
                            </select>
                        </div>
                    </div>
                    <button>Tìm kiếm</button>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9047.530514070106!2d106.68671320361251!3d11.077245364705613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527e27942656f%3A0x6263703256bee993!2zQ8O0bmcgVHkgVE5ISCBDdW5nIOG7qG5nIE5ow6JuIEzhu7FjIE5ow6JuIEtp4buHdA!5e0!3m2!1svi!2s!4v1690767380281!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#select-area").select2();
            $("#select-district").select2();
        });
  </script>
@endsection