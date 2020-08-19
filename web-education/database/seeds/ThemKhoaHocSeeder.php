<?php

use Illuminate\Database\Seeder;
use App\khoahoc;
class ThemKhoaHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $khoahoc = khoahoc::create(
        	['ten_khoa_hoc'=>'Nền tảng tiếng Anh cho người mới bắt đầu','gia'=>'199000
','nguoi_dung_id'=>'1','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Nội dung khóa học gồm 3 phần:
- Phát âm & nghe
+ Phát triển kỹ năng đọc và phân biệt bảng phiên âm quốc tế: /i:/, /ɪ/; /u:/, /ʊ/; /æ/, /e/, /ɜ:/, /ə/; /ɔ:/, /ɒ/; /a:/, /ʌ/ ; /eɪ/, /ɔɪ/, /ɪ, /tʃ/...
+ Cách nối âm, biến âm, luyện ngữ điệu trong câu như người bản ngữ, thực hành nói trong các đoạn hội thoại
- Từ vựng & ngữ pháp
+ Nắm vững và sử dụng thành thạo 12 thì ngữ pháp cơ bản và ứng dụng trong giao tiếp
+ Củng cố kiến thức về các loại từ, loại câu trong tiếng Anh.
+ Xây dựng nền tảng tiếng Anh vững chắc nhất cho việc học thi các chứng chỉ IELTS, TOEIC...sau này.
- Giao tiếp phản xạ
+ Thực hành các mẫu câu giao tiếp thông dụng, các mẫu hội thoại, bài tập luyện tập nghe, phản xạ theo chủ điểm thông dụng
+ Cách nói chuyện tự nhiên với người nước ngoài, làm cuộc nói chuyện trở nên hứng thú hơn.
Lợi ích từ khoá học
Luyện phát âm chuẩn toàn bộ 44 âm trong Bảng phiên âm quốc tế (Bảng IPA).
Hệ thống hóa lại toàn bộ kiến thức từ vựng, ngữ pháp và ứng dụng chúng dễ dàng trong giao tiếp.
Học giao tiếp, phản xạ qua các chủ điểm thông dụng, nối âm, biến âm, ngữ điệu lên xuống một cách tự nhiên nhất như người bản ngữ.
Những cách hay mẹo nhỏ giúp bắt chuyện, gợi mở câu chuyện với người nước ngoài một cách tự nhiên và đầy hứng thú.
Những bài tập thực hành đi kèm giúp người học tăng khả năng phản xạ, giao tiếp tự nhiên.
Phù hợp với
Ngữ âm kém, muốn cải thiện khả năng ngữ âm của mình.
Không có nền tảng ngữ pháp căn bản.
Không biết vận dụng ngữ pháp trong nghe nói.
Muốn giao tiếp tự tin.
Muốn cải thiện khả năng nghe và nói, phản xạ.
Những người mất gốc hoặc bắt đầu học tiếng Anh từ con số 0.
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Trọn bộ kỹ năng tiếng anh cơ bản.
 Giao tiếp tiếng Anh từ con số 0.']
        );
       $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Học tiếng Anh theo chủ đề: Jobs','gia'=>'199000
','nguoi_dung_id'=>'1','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:
- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học
- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học
- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề
- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...

Lợi ích từ khoá học
Chi phí rẻ, tiết kiệm thời gian
Học mọi lúc mọi nơi
Các tình huống cụ thể được minh họa sinh động qua video học liệu full HD
Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...
Chủ động thời gian và không gian
Phù hợp với
Những người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp
Những người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói
Những người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.
Khoá học với 100% giảng viên người bản ngữ, đến từ Topica Native
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Trung cấp','mo_ta_ngan'=>'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày']
        );
        $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Học tiếng Anh theo chủ đề: Jobs','gia'=>'199000
','nguoi_dung_id'=>'1','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:
- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học
- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học
- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề
- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...

Lợi ích từ khoá học
Chi phí rẻ, tiết kiệm thời gian
Học mọi lúc mọi nơi
Các tình huống cụ thể được minh họa sinh động qua video học liệu full HD
Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...
Chủ động thời gian và không gian
Phù hợp với
Những người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp
Những người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói
Những người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.
Khoá học với 100% giảng viên người bản ngữ, đến từ Topica Native
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Trung cấp','mo_ta_ngan'=>'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày']
        );
 $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Học tiếng Anh theo chủ đề: Education','gia'=>'199000
','nguoi_dung_id'=>'1','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:
- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học
- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học
- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề
- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...

Lợi ích từ khoá học
Chi phí rẻ, tiết kiệm thời gian
Học mọi lúc mọi nơi
Các tình huống cụ thể được minh họa sinh động qua video học liệu full HD
Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...
Chủ động thời gian và không gian
Khoá học với 100% giảng viên người bản ngữ, đến từ Topica Native
Phù hợp với
Những người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp
Những người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói
Những người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Trung cấp','mo_ta_ngan'=>'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày']
        );
 $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Học tiếng Anh theo chủ đề: Back to school','gia'=>'199000
','nguoi_dung_id'=>'1','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:
- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học
- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học
- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề
- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...

Lợi ích từ khoá học
Chi phí rẻ, tiết kiệm thời gian
Học mọi lúc mọi nơi
Các tình huống cụ thể được minh họa sinh động qua video học liệu full HD
Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...
Chủ động thời gian và không gian
Khoá học với 100% giảng viên người bản ngữ, đến từ Topica Native
Phù hợp với
Những người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp
Những người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói
Những người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Trung cấp','mo_ta_ngan'=>'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày']
        );
 $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Tiếng Anh giao tiếp thường ngày','gia'=>'199000
','nguoi_dung_id'=>'2','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Bạn biết đó, hầu hết những người học tiếng Anh đã học 
rất nhiều năm, thậm chí là 12 năm nhưng dường như chúng ta vẫn chẳng thể nói được một câu tiếng Anh cho gẫy gọn dù là câu đơn giản nhất. Ai trong số chúng ta cũng đều muốn giao tiếp tiếng Anh thật tốt nhưng chúng ta lại gặp phải những vấn đề như thiếu từ vựng, thiếu cấu trúc, ngữ pháp. Và do đó, khi phải nói thì chúng ta loay hoay nghĩ bằng tiếng Việt rồi cố tìm các từ bằng tiếng Anh để diễn đạt ý rồi ghép sao cho thành một câu rồi cuối cùng mới nói ra được. Nói xong thì mồ hôi cũng đã ướt áo nhưng người nghe cũng chẳng hiểu gì.
Không những thế bạn còn cảm thấy thật khó chịu với chính mình khi nghe ai đó nói tiếng Anh mà mãi bạn không hiểu gì và chỉ còn biết đến câu trả lời đơn giản nhất là Yes hoặc No hay một cái gật, một nụ cười trừ hoặc đến khi bạn hiểu ra thì câu chuyện đã kết thúc từ lâu. Đây là vấn đề thuộc về kỹ năng nghe, phản xạ mà hầu hết những người học tiếng Anh ở giai đoạn đầu đều mắc phải.
Bạn cũng gặp những vấn đề trên ư? Vậy hãy để tôi giúp bạn qua khóa học ""Tiếng Anh giao tiếp thường ngày"".

Lợi ích từ khoá học
Nạp được một khối lượng lớn các từ vựng trong các chủ điểm giao tiếp thường ngày
Học từ vựng thông qua hình ảnh, hành động, tưởng tượng giúp khắc sâu vào tiềm thức
Nạp được một khối lượng lớn các cấu trúc ngữ pháp giúp diễn tả ý dễ dàng, mạch lạc hơn
Học phát triển câu thông qua các cấu trúc. Chỉ với một cấu trúc, bạn có thể phát triển thành nhiều câu khác nhau
Các bài tập thực hành luyện nghe và nói cùng giảng viên giúp giúp khả năng nghe nói của người học trở nên lưu loát và tự nhiên hơn
Các bài học thực hành đóng vai giúp người học trở nên hứng thú hơn khi học tiếng Anh
Luyện phản xạ nhanh thông qua các bài học hỏi và đáp cùng giảng viên.
Tất cả các bài học trong khóa học đều nhằm mục đích cuối cùng là nâng cao và phát triển kỹ năng nghe nói và phản xạ tiếng Anh của người học.
Phù hợp với
Vốn từ vựng ít, không có đủ các cấu trúc ngữ pháp để giao tiếp tự nhiên
Không thể nói được một câu một cách chuẩn chỉnh, hay mắc tình trạng ghép các từ lại với nhau để nói
Muốn phát triển khả năng nghe nói và phản xạ của mình
Muốn giao tiếp tự tin với người nước ngoài
Muốn có một hệ thống bài học cụ thể, chi tiết và đầy đủ có thể học bất cứ lúc nào và bất cứ nơi đâu.
Thực sự muốn giỏi tiếng Anh và tiết kiệm thời gian ở mức tối đa.
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Trọn bộ kỹ năng tiếng anh cơ bản.
 Giao tiếp tiếng Anh từ con số 0.']
        );
  $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Lộ trình chinh phục IELTS 6.5 + (Phần 1)','gia'=>'599000
','nguoi_dung_id'=>'2','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Bạn đang loay hoay tự học IELTS để đạt được mức điểm 6.5
hay cao hơn mà chưa tìm ra được một phương pháp luyện thi hiệu quả và phù hợp?
Bạn cần sự hướng dẫn chi tiết - ""cầm tay chỉ việc"" từ một giảng viên giàu kinh nghiệm - máu lửa - tận tâm?
Bạn cần một cách tiếp cận dễ hiểu - dễ áp dụng - ""ăn liền"" để nhanh chóng đạt được mục tiêu đặt ra?
Hiểu được điều đó, cô Hằng Mun đã dốc sức xây dựng khóa IELTS ăn liền - cấp tốc chinh phục IELTS 5.5+. Với kinh nghiệm luyện thi IELTS trên 5 năm với hàng ngàn học viên đã đạt mục tiêu, cùng cách truyền đạt hấp dẫn, lôi cuốn và sự tương tác với học viên thông qua các câu hỏi, các ví dụ minh họa sống động, cùng hàng nghìn bài luyện tập được giải thích một cách chi tiết và cẩn thận, khóa học này giúp các bạn:
- Nắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.
- Hướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.
- Lý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng

- Tổng hợp các bí quyết để làm bài thi IELTS hiệu quả

- Các kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS

-Các cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking

- Luyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.
- Tặng kèm bộ tài liệu khủng 100+ sách và bí kíp ôn thi IELTS

Lợi ích từ khoá học
Nắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.
Hướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.
Lý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng
Tổng hợp các bí quyết để làm bài thi IELTS hiệu quả
Các kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS
Các cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking
Luyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.
Hệ thống bài tập về nhà đồ sộ và tài liệu tham khảo đi kèm với từng bài học giúp học viên áp dụng ngay những kiến thức đã học vào luyện tập
Phù hợp với
Người đi làm từ 22 - 35 tuổi (cần IELTS để tìm việc, chuyển việc tốt hơn, thăng tiến trong công việc)
Người đi học,học sinh, sinh viên đại học, cao đẳng từ 18 - 22 tuổi (cần IELTS để vào các chương trình học, tốt nghiệp ra trường, thay thế cho điểm thi Tiếng Anh vào Đại học, chuẩn bị cho đi du học) .
Người có nguyện vọng đi du học từ 18 - 35 tuổi tại tất cả các quốc gia yêu cầu điểm IELTS như Anh, Úc, Mỹ, Canada, New Zealand, Châu Âu..
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Chuyên sâu','mo_ta_ngan'=>'Luyện thi IELTS 6.5']
        );
  $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Lộ trình chinh phục IELTS 6.5 + (Phần 2)','gia'=>'599000
','nguoi_dung_id'=>'2','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Bạn đang loay hoay tự học IELTS để đạt được mức điểm 6.5
hay cao hơn mà chưa tìm ra được một phương pháp luyện thi hiệu quả và phù hợp?
Bạn cần sự hướng dẫn chi tiết - ""cầm tay chỉ việc"" từ một giảng viên giàu kinh nghiệm - máu lửa - tận tâm?
Bạn cần một cách tiếp cận dễ hiểu - dễ áp dụng - ""ăn liền"" để nhanh chóng đạt được mục tiêu đặt ra?
Hiểu được điều đó, cô Hằng Mun đã dốc sức xây dựng khóa IELTS ăn liền - cấp tốc chinh phục IELTS 5.5+. Với kinh nghiệm luyện thi IELTS trên 5 năm với hàng ngàn học viên đã đạt mục tiêu, cùng cách truyền đạt hấp dẫn, lôi cuốn và sự tương tác với học viên thông qua các câu hỏi, các ví dụ minh họa sống động, cùng hàng nghìn bài luyện tập được giải thích một cách chi tiết và cẩn thận, khóa học này giúp các bạn:
- Nắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.
- Hướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.
- Lý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng

- Tổng hợp các bí quyết để làm bài thi IELTS hiệu quả

- Các kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS

-Các cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking

- Luyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.
- Tặng kèm bộ tài liệu khủng 100+ sách và bí kíp ôn thi IELTS

Lợi ích từ khoá học
Nắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.
Hướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.
Lý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng
Tổng hợp các bí quyết để làm bài thi IELTS hiệu quả
Các kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS
Các cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking
Luyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.
Hệ thống bài tập về nhà đồ sộ và tài liệu tham khảo đi kèm với từng bài học giúp học viên áp dụng ngay những kiến thức đã học vào luyện tập
Phù hợp với
Người đi làm từ 22 - 35 tuổi (cần IELTS để tìm việc, chuyển việc tốt hơn, thăng tiến trong công việc)
Người đi học,học sinh, sinh viên đại học, cao đẳng từ 18 - 22 tuổi (cần IELTS để vào các chương trình học, tốt nghiệp ra trường, thay thế cho điểm thi Tiếng Anh vào Đại học, chuẩn bị cho đi du học) .
Người có nguyện vọng đi du học từ 18 - 35 tuổi tại tất cả các quốc gia yêu cầu điểm IELTS như Anh, Úc, Mỹ, Canada, New Zealand, Châu Âu..
','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Chuyên sâu','mo_ta_ngan'=>'Luyện thi IELTS 6.5']
        );
  $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Những lỗi thường gặp trong bài thi IELTS - Trình độ cao cấp','gia'=>'599000
','nguoi_dung_id'=>'3','linh_vuc_id'=>'1','trang_thai'=>'2','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Những lỗi thường gặp trong bài thi IELTS trình độ cao cấp
- Khóa học gồm:
- 30 bài giảng thời lượng khoảng 180 phút
- Nội dung của khóa học:
Cung cấp cho người học những kiến thức ngữ pháp và từ vựng về những lỗi thường gặp trong bài thi IELTS, giúp người học củng cố và cải thiện điểm số trong bài thi IELTS.
Phương thức giảng dạy của khóa học: Khóa học gồm 30 bài; mỗi bài xoay quanh một chủ đề cụ thể, được giáo viên trình bày một cách cô động, thuyết phục. Bên cạnh đó, giáo viên thường xuyên đưa ra các ví dụ minh họa giúp người học hiểu nhanh và nhớ lâu.

Lợi ích từ khoá học
Sau khi hoàn thành khóa học cộng với việc ôn luyện thường xuyên, người học sẽ tự tin hơn khi giao tiếp bằng tiếng Anh, nắm kiến thức vững hơn và đặc biệt điểm thi IELTS sẽ được cải thiện rõ rệt
Phù hợp với
Đối tượng của khóa học: học sinh, sinh viên, người đi làm trong nhiều lĩnh vực, người học tiếng Anh muốn cải thiện điểm thi IELTS, người học tiếng Anh muốn ôn luyện và củng cố kiến thức','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Chuyên sâu','mo_ta_ngan'=>'Kỹ năng ôn luyện và thi IELTS']
        );
  $khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Tiếng Đức sơ cấp cho người mới bắt đầu','gia'=>'199000
','nguoi_dung_id'=>'3','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Hiện nay, Đức nằm trong top 3 những nước được yêu thích
nhất của du học sinh toàn thế giới. Bằng cấp của các trường đại học tại Đức được nhà tuyển dụng trên toàn thế giới đánh giá rất cao. Ngoài ra, nước Đức là một quốc gia năng động với nền văn hóa đa dạng trong lòng Châu Âu. Vậy tại sao bạn không lựa chọn học tiếng Đức – thứ ngôn ngữ mà người ta gọi là: “Ngôn ngữ khởi nguồn của mọi ngôn ngữ”.
Khóa học ""Tiếng Đức sơ cấp cho người mới bắt đầu"" sẽ giúp bạn có những kiến thức cơ bản nhất thông qua các bài tập tình huống, hiện tượng ngữ pháp cơ bản nhất. Sau khóa học:
+ Các bạn sẽ tự tin đi sâu vào trình độ tiếng Đức nâng cao
+ Tự tin giao tiếp cơ bản với người bản ngữ
Các chương mục trong khóa học này được xây dựng một cách khoa học và có tính hệ thống. Các đầu mục được sắp xếp từ cơ bản đến phức tạp và có mối liên hệ chặt chẽ với nhau, giúp cho người học dễ dàng tiếp nhận kiến thức.

Lợi ích từ khoá học
Sau khi hoàn thành Khóa học, các bạn hoàn toàn đủ khả năng:
Đọc hiểu các văn bản thông thường
Viết câu phức
Giao tiếp trong các tình huống thường nhật
Học kiến thức cao hơn với nền tảng kiến thức cơ bản vững chãi
Phù hợp với
Những ai yêu thích nước Đức và học tiếng Đức
Những người chưa biết gì về tiếng Đức muốn học các kiến thức cơ bản
Những ai muốn làm việc tại các công ty Đức hoặc liên quan đến tiếng Đức','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Nhập môn tiếng Đức']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'NỀN TẢNG NGỮ PHÁP TIẾNG TRUNG - HSK5','gia'=>'199000
','nguoi_dung_id'=>'4','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Hiện nay, Đức nằm trong top 3 những nước được yêu thích
nhất của du học sinh toàn thế giới. Bằng cấp của các trường đại học tại Đức được nhà tuyển dụng trên toàn thế giới đánh giá rất cao. Ngoài ra, nước Đức là một quốc gia năng động với nền văn hóa đa dạng trong lòng Châu Âu. Vậy tại sao bạn không lựa chọn học tiếng Đức – thứ ngôn ngữ mà người ta gọi là: “Ngôn ngữ khởi nguồn của mọi ngôn ngữ”.
Khóa học ""Tiếng Đức sơ cấp cho người mới bắt đầu"" sẽ giúp bạn có những kiến thức cơ bản nhất thông qua các bài tập tình huống, hiện tượng ngữ pháp cơ bản nhất. Sau khóa học:
+ Các bạn sẽ tự tin đi sâu vào trình độ tiếng Đức nâng cao
+ Tự tin giao tiếp cơ bản với người bản ngữ
Các chương mục trong khóa học này được xây dựng một cách khoa học và có tính hệ thống. Các đầu mục được sắp xếp từ cơ bản đến phức tạp và có mối liên hệ chặt chẽ với nhau, giúp cho người học dễ dàng tiếp nhận kiến thức.

Lợi ích từ khoá học
Sau khi hoàn thành Khóa học, các bạn hoàn toàn đủ khả năng:
Đọc hiểu các văn bản thông thường
Viết câu phức
Giao tiếp trong các tình huống thường nhật
Học kiến thức cao hơn với nền tảng kiến thức cơ bản vững chãi
Phù hợp với
Những ai yêu thích nước Đức và học tiếng Đức
Những người chưa biết gì về tiếng Đức muốn học các kiến thức cơ bản
Những ai muốn làm việc tại các công ty Đức hoặc liên quan đến tiếng Đức','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Chuyên sâu','mo_ta_ngan'=>'Kỹ năng ôn luyện và thi IELTS']
 );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'NỀN TẢNG NGỮ PHÁP TIẾNG TRUNG - HSK5','gia'=>'199000
','nguoi_dung_id'=>'4','linh_vuc_id'=>'1','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Khóa học được thiết kế 15 bài:
- Mỗi bài giảng bao gồm:
+ Bài khóa.
+ Giảng chi tiết từ vựng, ngữ pháp.
+ Phần hỗ trợ ôn tập nhớ từ vựng.
+ Câu hỏi và bài tập củng cố kiến thức.
- Bài giảng trực quan như học trực tiếp.
- Có những yêu cầu học tập cụ thể cho học viên trong quá trình học.

Lợi ích từ khoá học
Có thể tham gia kỳ thi năng lực tiếng Hán từ trình độ HSK từ cấp 3 đến cấp 5.
Phù hợp với
Mọi đối tượng đã học tiếng Trung từ trình độ sơ cấp trở lên.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Nhập môn tiếng Trung']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Nhập môn lập trình Web','gia'=>'199000
','nguoi_dung_id'=>'5','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Bạn là người mới và muốn bước đầu tìm hiểu về lập trình web?
Bạn muốn tự xây dựng trang web cho sản phẩm của mình?

Bạn muốn tìm tòi học hỏi những điều mới, chuyên môn mới?

Bạn có niềm đam mê với bộ môn lập trình web nhưng đang băn khoăn không biết nên chọn khóa học nào?

Đừng lo lắng! Hãy đến với khóa học ""Nhập môn lâp trình web"" của chúng tôi để học tất cả những điều căn bản nhất về lập trình web.

Khóa học ""Nhập môn lập trình Web"" sẽ cho bạn cái nhìn tổng quan nhất về lập trình web. Những yếu tố giúp bạn đưa ra quyết định có nên học lập trình web hay không.

Đồng thời khóa học cũng giới thiệu cách thức sử dụng các công cụ đơn giản và dễ dùng nhất để xây dựng một trang web của riêng bạn.

Lợi ích từ khoá học
Biết được lý do tại sao bạn nên học lập trình web mà không phải một môn lập trình nào khác.
Hiểu được lập trình web là gì và những kiến thức cơ bản nhất về lập trình web.
Phù hợp với
Những người mong muốn học lập trình web.
Học sinh, sinh viên khoa CNTT.
Học sinh, sinh viên có ngành khác mong muốn học hỏi cái mới.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Hãy bắt đầu lập trình Web từ những vấn đề cơ bản nhất']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Dựng web chuyên nghiệp với Drupal','gia'=>'499000
','nguoi_dung_id'=>'5','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Drupal mang đến nhiều thay đổi đột phá cho hệ sinh thái của nó,
từ kiến trúc cơ bản đến chức năng. Hiểu những thay đổi này là rất quan trọng đối với bạn nếu bạn đang cố gắng khám phá Drupal và trở thành một chuyên gia Drupal đủ điều kiện. Video này sẽ giúp bạn xây dựng cấp độ kỹ năng Drupal của bạn từ cấp độ mặt đất và cho phép bạn tạo một ứng dụng Drupal hiệu quả từ đầu.

Chúng tôi bắt đầu với các tiêu điểm chính của các tính năng chính của Drupal và lý do tại sao chúng quan trọng với bạn. Tiếp theo, bạn sẽ học cách cài đặt và tùy chỉnh Drupal trên đường một cách dễ dàng và hiệu quả, đảm bảo các kho lưu trữ và thư viện cần thiết có trong hệ thống của bạn. Sau đó, bạn sẽ bắt đầu xây dựng ứng dụng Drupal của mình, tạo kiến trúc ứng dụng và sử dụng rộng rãi các chế độ xem và thành phần của Drupal . Bạn sẽ thấy cách tạo các mẫu có thể sử dụng lại bằng cách sử dụng tập lệnh PHP, sử dụng trình cắm và tự mình phát triển các trình cắm đơn giản. Đến cuối video, bạn cũng sẽ tìm ra cách kiểm tra, triển khai và giám sát ứng dụng của mình một cách hiệu quả.

Lợi ích từ khoá học
Khám phá cách tạo các trang web phức tạp một cách nhanh chóng.
Tìm hiểu cách sử dụng các khối xây dựng của Drupal.
Làm việc với mô-đun Lượt xem mạnh mẽ.
Quản lý người dùng và quyền của trang web.
Khám phá thế giới của nhiều góc nhìn và thành phần khác nhau trong Drupal 8.
Hiểu quy trình tạo các mẫu có thể tái sử dụng.
Sử dụng các plugin khác nhau và tạo các plugin của riêng bạn.
Hiểu cách kiểm tra, triển khai và giám sát ứng dụng của bạn.
Phù hợp với
Nếu bạn là một nhà phát triển PHP có kiến ​​thức cơ bản về cách các hệ thống CMS hoạt động, thì đây là khóa học hoàn hảo cho bạn.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Tự tin chinh phục Drupal chỉ với vài thao tác cơ bản và không cần biết lập trình']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Tự học lập trình website chỉ trong 6 tuần','gia'=>'199000
','nguoi_dung_id'=>'5','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Drupal mang đến nhiều thay đổi đột phá cho hệ sinh thái của nó,
từ kiến trúc cơ bản đến chức năng. Hiểu những thay đổi này là rất quan trọng đối với bạn nếu bạn đang cố gắng khám phá Drupal và trở thành một chuyên gia Drupal đủ điều kiện. Video này sẽ giúp bạn xây dựng cấp độ kỹ năng Drupal của bạn từ cấp độ mặt đất và cho phép bạn tạo một ứng dụng Drupal hiệu quả từ đầu.

Chúng tôi bắt đầu với các tiêu điểm chính của các tính năng chính của Drupal và lý do tại sao chúng quan trọng với bạn. Tiếp theo, bạn sẽ học cách cài đặt và tùy chỉnh Drupal trên đường một cách dễ dàng và hiệu quả, đảm bảo các kho lưu trữ và thư viện cần thiết có trong hệ thống của bạn. Sau đó, bạn sẽ bắt đầu xây dựng ứng dụng Drupal của mình, tạo kiến trúc ứng dụng và sử dụng rộng rãi các chế độ xem và thành phần của Drupal . Bạn sẽ thấy cách tạo các mẫu có thể sử dụng lại bằng cách sử dụng tập lệnh PHP, sử dụng trình cắm và tự mình phát triển các trình cắm đơn giản. Đến cuối video, bạn cũng sẽ tìm ra cách kiểm tra, triển khai và giám sát ứng dụng của mình một cách hiệu quả.
Lợi ích từ khoá học
Khám phá cách tạo các trang web phức tạp một cách nhanh chóng.
Tìm hiểu cách sử dụng các khối xây dựng của Drupal.
Làm việc với mô-đun Lượt xem mạnh mẽ.
Quản lý người dùng và quyền của trang web.
Khám phá thế giới của nhiều góc nhìn và thành phần khác nhau trong Drupal 8.
Hiểu quy trình tạo các mẫu có thể tái sử dụng.
Sử dụng các plugin khác nhau và tạo các plugin của riêng bạn.
Hiểu cách kiểm tra, triển khai và giám sát ứng dụng của bạn.
Phù hợp với
Nếu bạn là một nhà phát triển PHP có kiến ​​thức cơ bản về cách các hệ thống CMS hoạt động, thì đây là khóa học hoàn hảo cho bạn.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Tự Xây Dựng 10 Trang Web Chỉ Trong 6 Tuần']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Thiết kế Website siêu tốc trong 30 phút bằng các công cụ','gia'=>'499000
','nguoi_dung_id'=>'6','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Website là cách hiệu quả nhất để đưa thông tin và thuyết phục khách
hàng mua sản phẩm của bạn.

Tuy nhiên, thuê người làm 1 website tại Việt Nam sẽ tốn từ 500,000 đến 3,000,000 đồng, chi phí này còn phụ thuộc vào độ phức tạp mà bạn mong muốn cho trang web của bạn.

Đến với khóa học này, bạn sẽ biết cách sử dụng các công cụ siêu tốc phổ biến để thiết kế ra một trong web dễ dàng, chỉ trong 30 phút!

Ngoài ra, khóa học đem đến cho các bạn những kiến thức về Wordpress - một công cụ quyền năng dùng để tạo ra trang web riêng mang phong cách của bạn!

Đặc biệt: Tặng miễn phí theme Sahifa sử dụng trong suốt khóa học trị giá $59.99

Khóa học này cung cấp công cụ và phương pháp giúp bạn dễ dàng thiết kế website hoàn chỉnh mà không cần chuyên về IT, không cần biết về lập trình. Khóa học tập trung đi sâu vào WordPress, giúp bạn thành thạo một công cụ quyền năng nhất trong lĩnh vực Internet hiện nay, giúp bạn có được website không những nhanh, đẹp mà còn rất chuyên nghiệp. 

Bạn sẽ được hướng dẫn công thức 4 bước Thiết kế Web Siêu Tốc để hoàn thành một website nhanh với WordPress, sau đó bạn được chỉ dẫn các cách thức quản trị website chuyên nghiệp, làm sao dễ dàng chỉnh sửa web, dễ thay đổi nội dung theo ý muốn mà không cần phải nhờ vả vào bộ phận IT, bạn hoàn toàn có thể tự mình làm được tất cả, hoàn toàn tự chủ cho website của mình.

Không dừng lại ở đó, trong chương trình học bạn sẽ được chỉ dẫn những công cụ thiết kế website siêu tốc có sẵn khác, trong nhiều tình huống cụ thể nếu biết cách áp dụng những công cụ này bạn sẽ có được những website mạnh mẽ, phù hợp mà không cần tốn nhiều thời gian canh chỉnh và thiết kế.

BẠN SẼ BỎ LỠ ĐIỀU GÌ NẾU KHÔNG THAM GIA KHÓA HỌC NÀY?

- Kỹ năng đơn giản nhất vận hành website;

- Các công cụ miễn phí giúp bạn vận hành web site dễ dàng nhất

- Học kiến thức cơ bản về thiết kế, vận hành web

- Giảm thiểu chi phí và tiết kiệm thời gian vận hành website của bạn

Lợi ích từ khoá học
Hiểu được tầm quan trọng của website.
Biết cách quản trị, thay đổi, chỉnh sửa website theo ý muốn, sử dụng hiệu quả đúng mục đích.
Có thể bắt tay tự tạo ngay một website chỉ trong 30 phút, tiết kiệm chi phí và thời gian cho cá nhân và doanh nghiệp.
Phù hợp với
Người muốn phát triển nghề nghiệp lập trình web.
Những doanh nhân, chủ doanh nghiệp muốn tạo ra website để phục vụ mục đích cá nhân (Bán hàng, quảng bá thương hiệu...).
Người muốn kiếm tiền từ lập trình web (freelancer...).','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Học cách tạo ra một Website chỉ trong 30 phút với Wordpress và các công cụ tạo web siêu tốc']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Làm trang web của riêng bạn với HTML, CSS & Javascript','gia'=>'599000    
','nguoi_dung_id'=>'6','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Hiện nay, lập trình nói chung & lập trình Web nói riêng đang là xu
 hướng được nhiều bạn trẻ quan tâm. Với kinh nghiệm 5 năm giảng dạy về lập trình Web, tôi tự tin mang đến cho các bạn khóa học ""Xây dựng trang web của riêng bạn với HTML, CSS & Javascript"", nơi tập hợp nhiều kinh nghiệm quý giá tôi đã đúc kết được trong suốt quá trình làm việc với bộ công cụ tuyệt vời này:

- Giải thích rõ ràng & dễ hiểu tất cả các khái niệm cơ bản của HTML - CSS

- Hướng dẫn trực quan từng bước một để xây dựng nên 1 trang web bằng HTML & CSS

- Chia sẻ các bí quyết & kinh nghiệm thực tế qua 5 năm làm việc trực tiếp với lập trình Web front-end

Vì sao các bạn nên học khóa này?

- Thích lập trình Web nhưng không biết bắt đầu từ đâu

- Đã từng đọc qua nhiều tài liệu về HTML - CSS nhưng không hiểu tường tận các ngóc ngách của vấn đề

- Đã làm một vài dự án nhỏ bằng HTML & CSS nhưng chưa hài lòng về chất lượng hay muốn nâng cao hơn để có thể làm việc trong những dự án lớn hơn

- Kiếm được nhiều tiền hơn bằng HTML - CSS kết hợp với những kỹ năng bạn đã biết trước đó

Lợi ích từ khoá học
Nắm vững các khái niệm về lập trình HTML - CSS
Biết cách sử dụng các tính năng của HTML - CSS để làm nên 1 trang web đẹp
Có thể tự thực hành & tìm hiểu để nâng cao hơn nữa kỹ năng làm việc với HTML - CSS & rộng hơn là lập trình Web front-end
Phù hợp với
Khóa học này dành cho tất cả các bạn yêu thích lập trình, kể cả các bạn chưa biết gì về lập trình
Nếu đã học qua khóa ""Nhập môn lập trình Web"" do tôi dạy, các bạn có thể đi nhanh hơn và hiểu sâu hơn các khái niệm đưa ra trong khóa học này
Đối với những ai đã lập trình chuyên nghiệp, khóa học này có thể giúp các bạn có góc nhìn khác phong phú hơn về lập trình Web dựa trên kinh nghiệm 5 năm dạy lập trình Web của tôi','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Trung cấp','mo_ta_ngan'=>'Xây dựng trang web của riêng bạn với HTML, CSS & Javascript']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Làm web không cần code','gia'=>'599000    
','nguoi_dung_id'=>'7','linh_vuc_id'=>'2','trang_thai'=>'2','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Trong xu thế công nghệ hiện nay cách người dùng cũng như 
cách kinh doanh của bạn hoàn toàn thay đổi. Chỉ cần một chiếc máy tính hay một máy điện thoại bạn hoàn toàn có thể điều hành một hệ thống kinh doanh quản lý các đơn hàng một cách mượt mà kể cả bạn không có mặt!

Đến với khóa học, bạn sẽ được học về các ứng dụng plugin, theme của Wordpress. Tôi sẽ hướng dẫn bạn cách trang bị miễn phí các ứng dụng bổ trợ (plugin/addon) nổi tiếng và đắt tiền trị giá hàng trăm USD. Khi đã hiểu rõ cách làm, các bạn sẽ tạo nên những website cực kì chuyên nghiệp, đẳng cấp.

Xuyên suốt khóa học là các loại website: website tin tức, website bán hàng, website giới thiệu sản phẩm, giới thiệu công ty, website nhà hàng, địa điểm ăn uống. Kết thúc khóa học, bạn sẽ đủ kiến thức để tự tin quản lý, xây dựng bất kỳ website nào theo mong muốn.

Đặc biệt, khung chương trình khóa học luôn được mở rộng và cập nhật thường xuyên với nhiều phương pháp làm web cho các loại web khác nhau. Những thủ thuật hay nhất, kinh nghiệm đáng giá nhất, công cụ hiệu dụng nhất, kiến thức mới nhất… sẽ được cập nhật thường xuyên trên khóa học để các bạn luôn nắm được những công nghệ mới nhất cho website của mình. 

Học viên được hỗ trợ đặc biệt, học hỏi và trao đổi lẫn nhau qua cộng đồng bí mật dành riêng, các vấn đề cấp thiết cần gấp có thể hỗ trợ qua mail. Thậm chí nếu thời gian của bạn có hạn, tôi có thể trả lời bằng cách quay video support và up lên để bạn làm theo.

Lợi ích từ khoá học
Được học cách làm tất cả các loại website thuộc 2 chủ đề lớn website thông tin và website thương mại điện tử.
Được hướng dẫn thiết kế trang web nhà hàng coffee từ A - Z, theo kiểu cầm tay chỉ việc.
Được hướng dẫn làm website bán hàng của riêng bạn từ A - Z, giải thích những vấn đề chi tiết nhất của việc cài đặt website bán hàng, giải thích chi tiết qui trình bán hàng, tính phí ship hàng thế nào, thanh toán bằng chuyển khoản thế nào, phân loại sản phẩm...
Được học cách thiết kế trang web giới thiệu nhãn hàng, landing page với đầy đủ hiệu ứng, chức năng và nội dung.
Học cách sử dụng wordpress để kéo thả các khối text, ảnh, chia cột trong web, đặt hiệu ứng, đặt nội dung và vị trí theo ý muốn.
Sau khi hoàn thành khóa học, đảm bảo bạn có thể sao chép được 90% các website mong muốn.
Phù hợp với
Bất cứ ai muốn tạo một trang web cho doanh nghiệp của họ (để bán sản phẩm, dịch vụ giới thiệu hoặc hiển thị thông tin liên hệ).
Bất cứ ai muốn tạo một trang web sơ yếu lý lịch / danh mục đầu tư (để hiển thị các kỹ năng, kinh nghiệm và sơ yếu lý lịch, hoặc giới thiệu các dự án và danh mục đầu tư trong quá khứ).
Bất cứ ai muốn tạo một blog (để đi kèm với một trang web kinh doanh, chụp email hoặc như một blog cá nhân).
Bất cứ ai muốn học cách phát triển trang web nói chung.
Bất cứ ai muốn tìm hiểu cách sử dụng WordPress để phát triển trang web.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Trung cấp','mo_ta_ngan'=>'Làm web không cần code']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Laravel PHP Framework','gia'=>'199000    
','nguoi_dung_id'=>'7','linh_vuc_id'=>'2','trang_thai'=>'2','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Khoá học này sẽ hướng dẫn bạn phát triển một website
phần backend từ đầu tới cuối với ngôn ngữ PHP thông qua việc sử dụng Framework PHP mạnh mẽ nhất bây giờ là Laravel 5.3
- Khoá học được thiết kế theo phương pháp Learning by Doing. Học thông qua làm.
- Thông qua những ví dụ những bài tập và đặc biệt là thông qua dự án cuối môn, bạn sẽ hiểu và làm được những việc sau:
+ Tạo ứng dụng web theo kiến trúc MVC: Ứng dụng tinh gọn, dễ dàng tuỳ biến và bảo trì
+ Thực hiện điều hướng trang web thông qua route của Laravel
+ Tương tác với cơ sở dữ liệu thông qua hệ thống ORM có sẵn của Laravel
+ Tương tác với cơ sở dữ liệu bằng cách sử dụng lệnh SQL
+ Xây dựng website với toàn bộ các thao tác Thêm, Sửa, Xoá, Truy Vấn
+ Thiết lập và xây dựng kiến trúc cơ sở dữ liệu thông qua các file PHP.
+ Tạo layout chung cho ứng dụng web
+ Từ làm một website ứng dụng ToDoList từ đầu tới cuối với đầy đủ tính năng thao tác với cơ sở dữ liệu

Kết thúc khoá học, nếu bạn làm được project của dự án, thì tôi tin là bạn đã sẵn sàng để làm công việc của 1 developer PHP ở mức độ thành thạo. Bạn hãy tự tin để bắt đầu một công việc mới nhé!

Lợi ích từ khoá học
Xây dựng ứng dụng web hoàn chỉnh có tính tương tác với dữ liệu bằng PHP
Làm việc với Laravel Framework mới nhất
Xây dựng web theo mô hình MVC
Sử dụng Eloquent ORM để truy vấn dữ liệu
Sử dụng SQL trong Laravel Framework
Thiết lập template cho website với Blade Template
Xây dựng form để thu thập dữ liệu
Hiển thị dữ liệu
Tìm kiếm dữ liệu
Cập nhật và xoá dữ liệu
Định hướng trang web với Route
Phù hợp với
Sinh viên muốn trở thành lập trình viên web php chuyên nghiệp
Lập trình viên muốn học framework tuyệt vời nhất của php
Người muốn kiếm tiền từ công việc làm freelancer php developer','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Làm quen với framword laravel']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Trọn bộ kiến thức NodeJS','gia'=>'599000    
','nguoi_dung_id'=>'7','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Hiện nay, công nghệ thông tin xuất hiện ở mọi nơi,
sự phát triển nhanh chóng của nó kéo theo việc ngành lập trình trở thành một một lựa chọn lý tưởng cho các bạn trẻ. Và khi nhắc tới lập trình, ta có thể nói tới NodeJS. NodeJS là một nền tảng viết bằng JavaScript giúp xây dựng các ứng dụng mạng nhanh và khả mở. NodeJS được InfoWorld bình chọn là ""Công nghệ của năm"" năm 2012.

- Bạn là sinh viên CNTT, người vừa đi làm trong lĩnh vực CNTT

- Bạn có mong muốn tạo ra các sever games online, các ứng dụng, hay muốn đảm bảo ứng dụng hoạt động nhanh, đồng thời xử lý nhiều dữ liệu trong thời gian ngắn.

NodeJS chính là những gì bạn cần!

Tại sao lại sử dụng Node.js?
Đầu tiên là ưu điểm về tốc độ thực thi và khả năng mở rộng. Node.js có tốc độ rất nhanh. Đó là một yêu cầu khá quan trọng khi bạn là một startup đang cố gắng tạo ra một sản phẩm lớn và muốn đảm bảo có thể mở rộng nhanh chóng, đáp ứng được một lượng lớn người dùng khi trang web của bạn phát triển lên. 

Node.js có thể xử lý hàng ngàn kết nối đồng thời trong khi PHP sẽ chỉ có nước sụp đổ. Bên cạnh các lợi ích về tốc độ thực thi và khả năng mở rộng, có thể bạn cũng đã biết một chút về JavaScript, vì vậy tại sao lại phải phiền toái để học thêm về một ngôn ngữ lập trình hoàn toàn mới như PHP? Và sau đó bạn sẽ có một sự phấn khích khi học về một cái gì đó mới mẻ và gần như chưa được khám phá. Bạn còn nhớ cái cảm giác khi mà một cái gì đó mới xuất hiện và sau đó trở thành phổ biến khắp mọi nơi mà bạn hối tiếc đã không học về nó sớm hơn, và mãi mãi chỉ là người đến sau? Đừng phạm phải sai lầm như vậy lần này nữa. Node.js đang ngày càng trở nên lớn mạnh hơn.

Chúng tôi hân hạnh mang đến khóa học ""Trọn bộ kiến thức Node.js"", khóa học đầu tiên đầy đủ và chi tiết về NodeJS tại Việt Nam. Khóa học sẽ mang đến cho bạn trọn bộ kiến thức về Nodej.s. Ngay sau khóa học bạn có thể:

- Tăng tốc độ xử lý website cuả bạn gấp 5 lần với NodeJS

- Tự mình tạo ra các ứng dụng thời gian thật: Những trang web, server games online.

- Nhanh chóng sửa chữa các lỗi trong ứng dụng của bạn mà các phần còn lại của ứng dụng vẫn hoạt động bình thường.

Một khi nắm vững Nodej.s trong tay bạn sẽ dễ dàng trở thành lập trình viên chuyên nghiệp, được nhiều công ty săn đón. Vậy còn chờ gì nữa, hãy nhanh tay đăng ký khóa học của chúng tôi.

 

Lợi ích từ khoá học
Nắm được kiến thức NodeJS chi tiết và bài bản
Tạo ra các ứng dụng có tốc độ xử lý nhanh
Áp dụng kiến thức NodeJs cho những sản phẩm startup, yêu cầu thay đổi, mở rộng nhanh, có lượng truy cập lớn
Cải thiện tốc độ thực thi bằng cách áp dụng NodeJS. Đối với 1 tác vụ HTML đơn giản thì NodeJS có hiệu năng gấp đôi PHP
Trong cùng điều kiện làm việc thì thời gian CPU xử lý ứng dụng NodeJS nhanh gấp 40 lần PHP và chỉ chiếm RAM bằng 1/25 ứng dụng PHP
Phù hợp với
Những sinh viên chuyên ngành CNTT hoặc người vừa đi làm trong lĩnh vực CNTT
Những lập trình game muốn tạo ra các sever games online (ứng dụng thời gian thực)
Nếu bạn muốn tạo được các ứng dụng Chat live thì NodeJS là điều không thể thiếu
Nếu bạn đang là webfront end, đặc biệt là cho một Startup, chuyên phải đảm bảo ứng dụng hoạt động nhanh, đồng thời xử lý nhiều dữ liệu trong thời gian ngắn thì khóa học này chắc chắn hữu ích dành cho bạn
Những lập trình viên muốn tạo ứng dụng với số lượng dòng code ít hơn so với khi sử dụng những ngôn ngữ lập trình cơ bản như PHP...','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Chuyên sâu','mo_ta_ngan'=>'Tron bô kiến thức NodeJS']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'"Thành thạo Bootstrap qua 10 website và kiếm tiền từ công việc Freelancer"','gia'=>'599000    
','nguoi_dung_id'=>'8','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Tạo Chủ đề Bootstrap 4 nâng cao của riêng bạn từ đầu!
Khóa học này sẽ chỉ cho bạn cách tạo một Mẫu Bootstrap 4 hoàn chỉnh từ đầu bắt đầu với các tệp HTML, CSS và JavaScript trống! Chúng tôi sẽ di chuyển nhanh chóng để cung cấp cho bạn trải nghiệm xây dựng trang web Bootstrap nhanh nhất nhưng triệt để nhất có thể. Sau khi hoàn thành khóa học, bạn sẽ có thể thiết kế và phát triển các mẫu và chủ đề Bootstrap 4 của riêng bạn. Mã nguồn cho chủ đề đã hoàn thành mà chúng tôi phát triển được bao gồm cùng với:

Tải xuống chủ đề Animated Bootstrap 4 đã hoàn thành với hình ảnh gốc và biểu mẫu liên hệ email đầy đủ chức năng .

Chủ đề đã hoàn thành với hình ảnh giữ chỗ bao gồm kích thước của chúng (giúp dễ dàng tùy chỉnh chủ đề Bootstrap).

7 phiên bản khác của chủ đề bao gồm các phiên bản sau: Thanh trượt hình ảnh toàn màn hình, Trang đích video cố định, Menu thả xuống đa cấp với Bootstrap Navbar, Phiên bản HTML & PHP 5 trang, Phiên bản tắt hoạt hình và Phiên bản biểu mẫu liên hệ thay thế để gửi email với một địa chỉ khác ngoài tên miền của trang web của bạn.

Tiến trình tải mã nguồn cho từng phần của chủ đề trong khi xây dựng trang web của bạn để kiểm tra lỗi mã của bạn.

Một số tài nguyên cho hình ảnh chứng khoán chuyên nghiệp miễn phí không giới hạn, trình soạn thảo văn bản miễn phí, hoạt hình trang web, phông chữ trang web không giới hạn, v.v.

Tìm hiểu tại sao Bootstrap là khung phản hồi TỐT NHẤT và tìm hiểu cách tạo chủ đề trang web TUYỆT VỜI của riêng bạn!!!

Tôi ở đây để giúp bạn trên đường đi trong khi bạn thành thạo Bootstrap và tôi sẵn sàng trả lời bất kỳ câu hỏi nào bạn có thể có.

Lợi ích từ khoá học
Tìm hiểu cách thiết kế và phát triển Mẫu Bootstrap của riêng bạn từ đầu.
Tìm hiểu cách tích hợp và tùy chỉnh các trình cắm jQuery hiện đại vào bất kỳ mẫu nào.
Sử dụng HTML5 và CSS3 mới nhất để thêm kiểu dáng độc đáo vào Bootstrap.
Tích hợp Biểu mẫu liên hệ PHP đầy đủ chức năng vào bất kỳ Mẫu Bootstrap nào.
Nhận một khóa học sự cố của Hệ thống lưới Bootstrap với bố cục chủ đề.
Tinh chỉnh các kỹ năng HTML và CSS của bạn để phát triển trang web đáp ứng.
Tìm hiểu cách thêm Hoạt hình cuộn trang web vào bất kỳ Thành phần Bootstrap hoặc Thành phần HTML nào.
Phù hợp với
Bất cứ ai muốn tìm hiểu hoặc mở rộng kiến ​​thức về xây dựng các mẫu và chủ đề trang web Bootstrap.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Chuyên sâu','mo_ta_ngan'=>'Trở thành Freelancer Bootstrap thực thụ']
        );
$khoahoc = khoahoc::create(
            ['ten_khoa_hoc'=>'Học thiết kế Website động với ASP.NET WebForm và SQL Server','gia'=>'199000    
','nguoi_dung_id'=>'8','linh_vuc_id'=>'2','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Trung bình mỗi giây lại có 1 website đăng ký mới ra đời,
tính đến nay đã có hơn 1 tỷ website trên thế giới. Mỗi website lại có những đặc trưng riêng, những hình thức thể hiện và tính chất tương tác với người dùng khác nhau. Tuy nhiên tất cả chúng đều được xây dựng trên nền tảng là các ngôn ngữ lập trình web. 

Nếu bạn cũng muốn tự mình tạo ra một website thì bạn nhất định phải nắm vững các ngôn ngữ đó. Trong khóa học ""Thiết kế Website động với ASP.Net WebForm và SQL Server"", bạn được hướng dẫn triển khai từng bước để tạo một website hoàn chỉnh. Cụ thể: 

- Khóa học cung cấp trọn bộ kiến thức từ cơ bản đến nâng cao của lập trình .NET trên nền tảng ASP.NET WebForm. 

- Cung cấp những bài học sinh động với các bước thực hành step by step. 

- Khi hoàn thành khóa học, học viên có thể tự nghiên cứu các lĩnh vực khác trên nền tảng .NET như ASP.NET MVC, SharePoint. 

- Khóa họ̣c sử dụng công cụ Visual Studio, Framework mới nhất. 

- Hỗ trợ đa giao diện trên với công cụ Bootstrap. Đặc biệt, thay vì học code một cách máy móc, bạn sẽ được thao tác với dự án thực tế để triển khai ra ngoài doanh nghiệp một cách tốt nhất.

Lợi ích từ khoá học
Có được kiến thức và kỹ năng cơ bản để thiết kế 1 website hoàn chỉnh.
Nắm rõ những kiến thức về lập trình ASP.NET WebForm từ cơ bản đến nâng cao.
Tự xây dựng hoàn chỉnh website.
Làm tiền đề cho việc tự học thiết kế website bằng ASP.NET MVC cũng như khả năng tạo hệ thống lớn trên nền tảng web.
Phù hợp với
Sinh viên đã từng học qua ngôn ngữ lập trình C# và SQL Server.
Sinh viên CNTT đang muốn học thiết kế website doanh nghiệp trên nền tảng ASP.NET WebForm.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Các bước để thiết kế Website động với ASP.NET WebForm và SQL Server']
        );
        $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Làm chủ Excel 2010 trong 4 giờ','gia'=>'199000    
    ','nguoi_dung_id'=>'9','linh_vuc_id'=>'3','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'Cập nhật phiên bản mới: "Làm chủ Excel 2010 trong 4 giờ"
    với nhiều bài giảng và bài tập mới được đầu tư công phu về nội dung và hình thức.','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Làm chủ Excel trong 4 giờ" giúp bạn tự tin sử dụng Excel và tăng gấp đôi hiệu suất công việc']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Guitar đệm hát trong 30 ngày','gia'=>'199000    
    ','nguoi_dung_id'=>'10','linh_vuc_id'=>'4','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Khóa học gồm :
    - 6 học phần
    - 77 bài giảng được hướng dẫn cụ thể từ giảng viên
    - 5 cấp độ từ cơ bản đến nâng cao
    - Hệ thống tài liệu chi tiết cho từng học phần.
    
    Lợi ích từ khoá học
    Nắm vững nhạc lý: Cách đọc tọa độ, bấm hợp âm, tiết tấu; Cách rải âm và quạt chả.
    Thành thạo các điệu cơ bản: Surf nhanh - chậm, Disco, Blue, Ballad, Báo, Fox, Valse, Bolero, Slow Rock,...
    Thành thạo cách dò các nhịp, điệu của một bài hát, bắt nhịp và chọn điệu, bắt tông cho ca sĩ, đánh intro và outro, search hợp âm chuẩn,...
    Biết cách chọn đàn sao cho phù hợp với mục đích, túi tiền và phong cách nhưng vẫn phải đảm bảo những yêu tố thiết yếu.
    Phù hợp với
    Yêu thích âm nhạc và có cảm hứng đặc biệt với những cây đàn Guitar.
    Muốn học Guitar đệm hát nhưng chưa biết bắt đầu từ đâu
    Muốn học Guitar nhưng bị giới hạn về thời gian và tài chính
    Học đệm hát để chơi các bài hát mà mình yêu thích"
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Trọn bộ 77 bài giảng chi tiết và tài liệu phong phú cùng Guitarist Hiển Râu']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Yoga trẻ hóa - Làm đẹp cho khuôn mặt','gia'=>'199000    
    ','nguoi_dung_id'=>'11','linh_vuc_id'=>'5','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Khóa học gồm:
    - 9 học phần với 26 bài giảng.
    Nội dung khóa học cung cấp:
    - Kỹ thuật thở đúng trong Yoga.
    - Các bài tập cho cột sống dẻo dai và khỏe mạnh.
    - Kỹ thuật Yoga tăng cường sức khỏe, hiệu quả và an toàn.
    - Các bài tập Yoga linh hoạt các khớp, uyển chuyển toàn thân và trẻ hóa cơ thể.
    - Các động tác Yoga tái tạo tế bào, gia tăng sức đề kháng, chống lão hóa.
    - Yoga 5 ngày: Trị liệu làm đẹp và giảm eo thần kì.
    
    
    Lợi ích từ khoá học
    Giảm căng thẳng, tăng tính linh hoạt và cải thiện vòng eo.
    Cải thiện vóc dáng, làn da, giảm đau xương khớp, ổn định đường huyết, lấy lại cảm giác thăng bằng.
    Xương chắc khỏe, vẻ ngoài hoàn hảo.
    Giảm nguy cơ bệnh tim mạch.
    Phù hợp với
    Bạn muốn học yoga mà không biết bắt đầu từ đâu?
    Bạn căng thẳng vì áp lực công việc, gia đình?
    Bạn gặp vấn đề về xương khớp, cân nặng, vòng eo,...
    Bạn thường xuyên mất ngủ, mệt mỏi, lão hóa nhanh..."    
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'YOGA trẻ hóa - Làm đẹp cho khuôn mặt']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Tất tần tật về Photoshop Lightroom','gia'=>'199000    
    ','nguoi_dung_id'=>'11','linh_vuc_id'=>'6','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Các kiến thức cơ bản về ảnh, cân bằng trắng, hệ màu HSL,
    xử lý nhiễu, xử lý nét, xử lý mụn, xử lý ánh sáng, xử lý tông màu, xử lý ""xóa rác"" xử lý bộ lọc, thay đổi lại cấu trúc ảnh sau khi chụp, xử lý viền ảnh, xử lý các hiệu ứng lỗi khi chụp ảnh, xử lý ảnh panorama.
    - Cung cấp kiến thức về cách chỉnh sửa ảnh, cách chuẩn hóa một ảnh, cách chỉnh sửa ảnh giống như dân chuyên nghiệp với phần mềm Adobe LightRoom.
    - Qui trình sử dụng Lightroom dàn trang để tạo ra một quyển album ảnh thế nào
    - Sau khi học xong bạn sẽ có một niềm tin vững chắc về những gì có thể làm trên Photoshop lightroom để tự  tin chụp ảnh trong bất cứ điều kiện nào, tự tin sáng tạo ra các bức ảnh đẹp, tư tin rằng khi ảnh chụp xong sẽ xử lý lại theo đúng ý mình được.
    
    Lợi ích từ khoá học
    Sau khi hoàn thiện khóa học, bạn tự tin chụp những bức ảnh trong mọi điều kiện mà không phải lo về vấn đề ảnh có xử lý được không, có chỉnh được màu cho cái này không ..
    Tự tạo album ảnh cưới chuyên nghiệp như studio với các tính năng mạnh mẽ của Lightroom.
    Hiểu bản chất các tính năng của ảnh, đọc được biểu đồ ảnh, cần sửa ở đâu, sửa thế nào Tự tin nhận làm các công việc liên quan đến cân chỉnh ảnh.
    Tự quản lý thư viện ảnh hàng nghìn ảnh, không lo lắng bị mất thông tin ảnh, tìm một bức ảnh trong nháy mắt cực kì dễ dàng với Lightroom - tính năng chỉ khi nào bạn sử dụng bạn mới biết nó tiện lợi đến mức nào.
    Tự làm album cho bản thân, cho gia đình, người thân bằng một vài lần click với tính năng đặc biệt của Lightroom.
    Tự upload gallery ảnh trực tuyến cho công việc, hoặc nhu cầu cá nhân trong vài thao tác cơ bản.
    Phù hợp với
    Những người đi học, người đi làm, ít có thời gian chỉnh sửa ảnh, mà vẫn muốn có những bức ảnh chỉnh sửa sáng tạo theo ý muốn.Lightroom chính là phần mềm như thế.
    Những người làm trong ngành ảnh, muốn công nghiệp hóa qui trình xử lý ảnh, với các tính năng hỗ trợ in ấn, làm album ảnh cưới của Lightroom.
    Những người chưa biết gì về xử lý ảnh, ngại việc xử lý bằng photoshop với quá nhiều công cụ và thao tác.
    Những người đã có kiến thức về xử lý ảnh trên photoshop, nhưng muốn tìm hiểu thêm các tính năng đặc trưng của Lightroom, muốn trả lời câu hỏi vì sao mọi người đều chuyển sang dùng lightroom cho việc xử lý ảnh.
    Những người thích tìm hiểu phần mềm, muốn hiểu vì sao lightroom vượt trội hơn so với các phần mềm khác như instagram, picasa, camera360.
    Những bạn trẻ muốn tự tin chụp những bức ảnh trong mọi điều kiện mà không phải lo về vấn đề ảnh có xử lý được không, có chỉnh được màu cho cái này không .."
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Những bạn trẻ muốn tự tin chụp những bức ảnh']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Các kỹ thuật thuyết trình chuyên nghiệp','gia'=>'199000    
    ','nguoi_dung_id'=>'11','linh_vuc_id'=>'7','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Lời nói không xương nhưng nó đủ cứng để
    phá vỡ những trái tim, ghim vào tâm trí người nghe như những con dao sắc bén.
    
    Tại sao nhiều người có cách nói chuyện trước đám đông lại tự tin và rất cuốn hút, trong khi bạn chưa bao giờ hài lòng với bài thuyết trình của mình, dù bạn đã chuẩn bị rất kỹ?
    
    Kỹ năng thuyết trình kém sẽ khiến bạn mất đi nhiều cơ hội nghề nghiệp, đánh rơi cơ hội thăng tiến, không thể hiện được năng lực và ý tưởng của mình trước những người khác. Trong khi đó, đây là kỹ năng bạn hoàn toàn có thể rèn luyện được.
    
    Dù là nói chuyện trước công chúng, phát biểu trước đồng nghiệp trong buổi họp, đọc diễn văn trước đông đảo khách hàng hay đơn giản chỉ là trình bày một bài báo cáo trong đại hội, chia sẻ kiến thức trong bài trình bày trên lớp,... tất cả đều cần đến: Kỹ năng thuyết trình trước đám đông.
    
    Khoá học Kỹ năng thuyết trình không chỉ là kỹ năng thuyết trình, mà còn là kỹ năng thuyết trình chuyên nghiệp! Chúng tôi không hướng dẫn bạn cách hô hào mà là những cách nói chuyện thuyết phục tạo ấn tượng sâu sắc trong lòng khán giả, thể hiện một phong cách chuyên nghiệp.
    
    Tại đây, bạn sẽ được hướng dẫn các kỹ năng như: cách xuất hiện ấn tượng, cách ứng xử thông minh trên sân khấu, cách thuyết trình ứng biến, cách sử dụng hình thể, cách hâm nóng bầu không khí - tạo hiệu ứng đám đông, làm sao để tự tin trước đám đông, cách làm slide thuyết trình powerpoint và cả các cách xử lý các tình huống sự cố.
    
     
    
    Lợi ích từ khoá học
    Nắm các kỹ thuật diễn đạt bằng hình thể & sắc thái giọng nói.
    Biết cách khắc phục ""căn bệnh bí từ"".
    Nắm căn bản kỹ thuật phát âm, sử dụng giọng nói.
    Biết thuyết trình thông minh với powerpoint.
    Biết phát biểu ứng biến không có sự chuẩn bị.
    Biết thể hiện thành công bài thuyết trình thuyết phục ngắn.
    Vượt qua hồi hộp & nâng cao tự tin khi đứng trước công chúng.
    Nắm các kỹ thuật xuất hiện ấn tượng trên sân khấu.
    Biết các phương pháp kích thích bầu không khí trầm lắng.
    Phù hợp với
    Khóa học này dành cho những đối tượng hay nói trước đông người như:
    Học sinh, sinh viên khi thuyết trình trên lớp.
    Người đi làm, nhân viên văn phòng thuyết trình trước đồng nghiệp, trước cấp trên.
    Các cấp quản lý như trưởng phòng, giám đốc phát biểu trong cuộc họp, hội nghị.
    Nhân viên thuyết trình sản phẩm với khách hàng, đại diện nhãn hàng phát biểu trong sự kiện marketing."
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Các kỹ thuật thuyết trình chuyên nghiệp']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Kiếm tiền trên Youtube dễ dàng','gia'=>'199000    
    ','nguoi_dung_id'=>'11','linh_vuc_id'=>'8','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Nếu bạn đang ở đây và tìm hiểu về khoá học
    này thì chắc chắn một điều rằng bạn đang muốn biết cách kiếm tiền trên Youtube hoặc ít nhất bạn cũng quan tâm, tìm hiểu về khóa học kiếm tiền trên Youtube, và muốn tạo ra cho mình một nguồn thu nhập cao hơn và ổn định hơn, thì bạn sẽ đạt được điều những mong muốn của bạn một cách nhanh chóng với khoá học ""Kiếm tiền từ Youtube"". Khóa học này chính là bước đi đầu tiên cho việc xây dựng hệ thống kiếm tiền triệu đô một cách hoàn toàn tự động. Với 32 bài giảng bao gồm cả lý thuyết lẫn hướng dẫn thực hành chi tiết, bạn sẽ không cảm thấy tốn thời gian khi tham gia khoá học này cùng chúng tôi."
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Kiếm tiền trên Youtube không khó như bạn nghĩ']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Kỹ xảo làm phim: Nghệ thuật kể chuyện cơ bản','gia'=>'199000    
    ','nguoi_dung_id'=>'11','linh_vuc_id'=>'9','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Điều gì khiến cho một câu chuyện trở thành một câu chuyện hay?
    Điều gì khiến cho một người trở thành một chuyên gia kể chuyện? Kể chuyện là một điều tất cả chúng ta làm một cách tự nhiên, bắt đầu từ khi còn nhỏ, nhưng có một sự khác biệt giữa kể chuyện hay và kể chuyện tuyệt vời.Trong bài học này bạn sẽ nghe thấy từ các giám đốc Pixar và Các nghệ sỹ kể về cách họ bắt đầu và những câu chuyện nào truyền cảm hứng cho họ, và bạn sẽ bắt đầu suy nghĩ về những dạng câu chuyện mà bạn muốn kể.
    
    
    - Nhân vật là trung tâm của mọi bộ phim mà Pixar sản xuất; Họ là những cá nhân mà chúng ta dõi theo cuộc hành trình trong mỗi câu chuyện. Nhưng làm thế nào để Pixar đến với những nhân vật này, làm cho họ nhiều hơn, không chỉ đơn thuần là những ý tưởng chung, và thực sự mang họ đến đời thực? Trong bài học này bạn sẽ khám phá cách mà các chuyên gia phát triển nhân vật thúc đẩy quá trình kể chuyện ở Pixar và bạn sẽ bắt đầu suy nghĩ về việc tạo ra các nhân vật cho những câu chuyện của riêng bạn.
    
    
    - Mỗi câu chuyện được kể đều có nền tảng, hoặc cấu trúc. Ví dụ, một trong những cấu trúc câu chuyện cơ bản nhất là """"nó bắt đầu, một cái gì đó xảy ra, và nó kết thúc"""". Nhưng cấu trúc câu chuyện có thể phức tạp, và nếu được sử dụng tốt bạn thậm chí không nhận thức được nó. Trong bài học này, bạn sẽ học được cách Pixar xây dựng bộ phim của họ, và bạn sẽ bắt đầu đặt nền móng cho những câu chuyện của riêng bạn
    
    Lợi ích từ khoá học
    Khám phá các yếu tố kể chuyện kích thích sự mong đợi của người đọc, sự hồi hộp và thu hút, mời người đọc vào thế giới câu chuyện.
    Hiểu được các kỹ thuật và các yếu tố được sử dụng cho thế giới câu chuyện, cho dù thế giới là hiện tại, lịch sử, huyền bí, khoa học viễn tưởng, tưởng tượng đô thị hay huyền diệu.
    Khám phá lý do tại sao không có quy tắc tuyệt đối cho sự khởi đầu rực rỡ.
    Tạo sự khởi đầu câu chuyện mạnh mẽ hơn để gợi lên sự tò mò và thu hút khán giả của bạn.
    Phù hợp với
    Dành cho những người mong muốn độc giả yêu thích câu chuyện của họ nhưng lại gặp khó khăn trong việc tạo ra một khởi đầu hấp dẫn người đọc và người nghe
    Dành cho bất cứ ai hứng thú với việc thảo luận và phân tích những câu chuyện mà họ đọc hay nghe được"
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Khóa học bằng tiếng Anh']
            );
            $khoahoc = khoahoc::create(
                ['ten_khoa_hoc'=>'Tự chăm sóc da tại nhà hiệu quả không kém đi spa','gia'=>'199000    
    ','nguoi_dung_id'=>'11','linh_vuc_id'=>'10','trang_thai'=>'1','hinh_anh'=>'https://bom.to/flhu18','mo_ta_chi_tiet'=>'"Khóa học cung cấp những thông tin cơ bản nhất về nội dung,
    thời lượng học, cách thức áp dụng trong thực tế. Chia sẻ của bản thân giảng viên về những trải nghiệm đúc rút được từ thực tế cuộc sống. Ý nghĩa và tầm quan trọng của việc học & áp dụng những kỹ năng cũng như kiến thức trong khóa học đối với mục tiêu cá nhân của học viên.
    
    Lợi ích từ khoá học
    Sau khi kết thúc khóa học bạn biết chăm sóc da đúng cách, tiết kiệm đáng kể một khoản tiền cho công cuộc làm đẹp cho dù bạn đến Spa hay tự mình chăm sóc
    Bạn có thể kiếm được tiền từ việc chăm sóc da cho những người xung quanh, người thân, bạn bè v.v
    Ngay sau khi học xong người học có thể áp dụng để tạo thêm nguồn thu nhập, các mẹ thêm tiền bỉm sữa cho con.
    Sau khi kết thúc khóa học các chị em phụ nữ biết cách chăm sóc sắc đẹp chủ động cho dù bạn tự chăm sóc tại nhà hay chăm sóc ở Spa thì bạn cũng đều giảm được chi phí đáng kể cho công cuộc làm đẹp mà vẫn hiệu quả .
    Phù hợp với
    Phù hợp nhất với các chị em phụ nữ không có thời gian đi Spa.
    Học sinh, sinh viên mong muốn trang bị thêm kiến thức về làm đẹp
    Phù hợp với nữ 15 - 50 tuổi
    Phụ nữ bất kỳ ngành nghề nào cũng đều nên học"
    ','ngon_ngu'=>'Tiếng Việt','muc_do'=>'Sơ cấp','mo_ta_ngan'=>'Chăm sóc da tại nhà']
            );
    }
}
