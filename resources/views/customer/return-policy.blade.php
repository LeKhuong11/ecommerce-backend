@extends('layout.app')

@section('seo')
<title>Return Policy</title>
@endsection

@section('content')
<div id="return-policy" class="policy">
    <div class="container p-5 bg-white box-shadow">
        <h3 class="text-center">Quy định đổi hàng</h3>
        <div class="content">
            <h5>1. THANH TOÁN TRẢ TRƯỚC</h5>
            <p>05 ngày kể từ ngày nhận hàng.</p>
            <ul>
                <li>Với Khách hàng mua hàng tại cửa hàng: Ngày nhận hàng là ngày ghi trên hóa đơn bán hàng.</li>
                <li>Với Khách hàng mua hàng online: Ngày nhận hàng là ngày Khách hàng nhận được hàng từ đối tác giao vận được VINA BIRDSNEST.</li>
                <li>Với Khách hàng mua hàng tại cửa hàng: Mua hàng tại cửa hàng nào đổi trả tại chính cửa hàng đó, không áp dụng đổi hàng tại các cửa hàng khác.</li>
                <li>Với Khách hàng mua hàng online: Khách hàng đổi trả tại Văn phòng công ty (chi tiết tại quy trình xử lý thủ tục đổi trả hàng).</li>
            </ul>
            <h5>2. ĐIỀU KIỆN ĐƯỢC ĐỔI TRẢ HÀNG</h5>
            <ul>
                <li>Còn hóa đơn mua hàng, còn nguyên nhãn mác, thẻ bài đính kèm sản phẩm và sản phẩm không bị dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua sản phẩm.</li>
                <li>Sản phẩm lỗi từ phía nhà sản xuất.</li>
                <li>Sản phẩm mua nguyên giá.</li>
            </ul>
            <h5>3. KHÔNG ÁP DỤNG CHÍNH SÁCH NÀY KHI</h5>
            <ul>
                <li>Sản phẩm mua trong chương trình khuyến mại.</li>
                <li>Sản phẩm quá thời hạn đổi nói trên.</li>
                <li>Sản phẩm không còn nhãn mác, sử dụng sai quy cách, bảo quản va chạm, ma sát với vật cứng làm trầy xước, hư hỏng.</li>
                <li>Không có hóa đơn mua hàng.</li>
                <li>Các phụ kiện của sản phẩm không còn đầy đủ (mất cúc, khóa…)</li>
                <li>Sản phẩm đồ lót, tất và phụ kiện.</li>
                <li>Sản phẩm đã sử dụng hoặc đã có mùi nước hoa, hóa mỹ phẩm.</li>
                <li>Với những đơn xuất hóa đơn công ty.</li>
            </ul>
            <h5>4. GIÁ TRỊ ĐỔI HÀNG</h5>
            <ul>
                <li>Giá trị sản phẩm đổi: bằng hoặc cao hơn giá trị sản phẩm đã mua trước đó.</li>
                <li>Nếu sản phẩm đổi có giá trị cao hơn, Quý khách thanh toán tiền chênh lệch, nếu sản phẩm đổi có giá trị thấp hơn VINA BIRDSNEST không hoàn trả tiền thừa.</li>
            </ul>
            <h5>5. QUY TRÌNH XỬ LÝ THỦ TỤC ĐỔI TRẢ HÀNG</h5>
            <ul>
                <li>Với Khách hàng mua hàng tại cửa hàng: Khách hàng mang sản phẩm tới cửa hàng VINA BIRDSNEST nơi quý khách mua hàng, hoặc liên hệ ngay hotline: 19008079 để nhận được tư vấn phù hợp nhất.</li>
                <li>Với Khách hàng mua hàng online, Quý khách có thể chủ động gửi hàng về VP Công ty theo địa chỉ:
                    <ul>
                        <li>Miền Bắc: Số 35 đường Quyết Thắng, lô 18 cụm khu công nghiệp, phường Yên Nghĩa, quận Hà Đông, Hà Nội, Việt Nam.</li>
                        <li>Hoặc liên hệ ngay Hotline 19008079 để được NV CSKH VINA BIRDSNEST hỗ trợ lên vận đơn gửi hàng về Công ty.</li>
                    </ul>
                </li>
                <li>Công ty sẽ kiểm tra tình trạng sản phẩm và tiến hành đổi hàng với những trường hợp sản phẩm đáp ứng tiêu chí của điều kiện đổi hàng trong chính sách đã cam kết.</li>
                <li>Sau khi tiến hành kiểm tra xác minh, nhân viên CSKH của VINA BIRDSNEST sẽ liên hệ bằng điện thoại hoặc email để xác nhận thông tin đổi hàng.</li>
                <li>Quy trình xử lý thủ tục đổi hàng được thực hiện trong vòng 3 - 7 ngày tính từ lúc VINA BIRDSNEST nhận đủ thông tin và các giấy tờ theo quy định từ phía khách hàng.</li>
            </ul>
            <h5>6. QUI ĐỊNH VỀ PHÍ VẬN CHUYỂN</h5>
            <ul>
                <li>Với trường hợp đổi trả hàng do phát sinh từ phía khách hàng (chọn sai sản phẩm, màu sắc, kích cỡ…): Khách hàng chịu phí vận chuyển 2 chiều.</li>
            </ul>
            <p>Với trường hợp đổi trả hàng do phát sinh từ phía VINA BIRDSNEST (sản phẩm được giao có lỗi kỹ thuật từ nhà sản xuất hoặc bộ phận giao hàng của VINA BIRDSNEST giao sai sản phẩm so với thông tin đặt hàng,...): Công ty sẽ chịu phí vận chuyển 2 chiều.</p>
        </div>
    </div>
</div>
@endsection