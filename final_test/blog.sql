-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fem`
--

CREATE TABLE `fem` (
  `userid` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `fem`
--

INSERT INTO `fem` (`userid`, `username`, `password`, `displayname`, `email`, `registration_date`) VALUES
(128, 'PhanThanhBinh', '$2y$10$g4QjkZkCOw63CMX5gh33.egwlZ8mczcYZyE0qh9MZw7UWk6dGpKW2', 'hien', 'luhan18092000@gmail.com', '2020-11-13 12:57:47'),
(129, 'PhanThanhBinh', '$2y$10$UcswLjqpMuKlzch0GJRx1O0.kBUd7K4s7rY444R9/KDd/LXRDeX4W', 'hien', 'luhan18092000@gmail.com', '2020-11-13 12:59:54'),
(130, 'trần thị thu hiền', '$2y$10$04j5CGbl4IVL8jkfyRinnOt6hblYIGuC6/a3pOVgEZBkm7UR4G52S', 'hhhkfk', 'luhan18092000@gmail.com', '2020-11-13 13:38:59'),
(150, 'hien123', '123456789', 'hien', 'hien123@gmail.com', '2020-11-13 14:36:45'),
(151, 'PhanThanhBinh', '', 'hien', 'web2code2vn@gmail.com', '0000-00-00 00:00:00'),
(152, 'trần thị thu hiền', '', 'hien', 'luhan18092000@gmail.com', '0000-00-00 00:00:00'),
(153, 'nguyen thi hue', '$2y$10$bHnKD9GUlw7yCZzDKBYWg.cQEZf6EIg89CIeCEv5BfwjMAMy9QxJu', 'hue', '03386530@gmail.com', '2020-11-13 21:11:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuhinhthanh`
--

CREATE TABLE `lichsuhinhthanh` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichsuhinhthanh`
--

INSERT INTO `lichsuhinhthanh` (`id`, `name`, `content`) VALUES
(1, 'Lịch sử hình thành và phát triển Khoa Kinh tế và Quản lý', 'Khoa Kinh tế và Quản lý (K) thuộc Trường Đại học Thủy Lợi có các chức năng đào tạo và nghiên cứu khoa học. Hiện tại Khoa K đang đào tạo 3 ngành bậc Cao học và 4 ngành bậc đại học hệ chính quy.\r\nKhoa Kinh  tế và Quản lý được thành lập vào năm 1979. Trải qua gần 40 năm kể từ ngày thành lập đến nay, Khoa đã được đặt và đổi những tên sau: (1) Khoa Bồi dưỡng (1979-1984); (2) Khoa Kinh tế Thủy lợi (1984-2006); (3) Khoa Kinh tế và Quản lý (từ 2007 đến nay).\r\n\r\nGiai đoạn từ 1984 - 2006, Khoa được đổi tên thành Khoa Kinh tế Thuỷ lợi, ngoài việc tiếp tục đào tạo kỹ sư kinh tế thuỷ lợi hệ chuyên tu (4 năm), Khoa bắt đầu mở và đào tạo kỹ sư kinh tế thuỷ lợi hệ chính quy (5 năm). Từ năm học 1989 - 1990 Khoa dừng đào tạo hệ chuyên tu (lớp Chuyên tu 24KT là lớp cuối cùng của hình thức đào tạo này) và bắt đầu tập trung đào tạo hệ chính quy. Lớp 31K là lớp chính quy Kinh tế - kỹ thuật đầu tiên đánh dấu bước trưởng thành mới và khẳng định vị trí của Khoa trong hoạt động đào tạo của Nhà trường.\r\n\r\nNhững năm đầu khi mới thành lập Khoa, nền kinh tế Việt Nam đang còn hoạt động theo cơ chế bao cấp nên tư duy kinh tế còn bị hạn chế, và công tác quản lý kinh tế còn đang bị xem nhẹ. Tư tưởng bảo thủ trước cái mới còn rất phổ biến. Trong bối cảnh đó, việc thành lập Khoa không tránh khỏi những thách thức về vị thế và tiềm năng của ngành Kinh tế và quản lý trong trường kỹ thuật.\r\n\r\nThêm vào đó, trong thời gian đầu, đội ngũ giáo viên của Khoa còn mỏng, chưa có giảng viên được đào tạo chuyên về Kinh tế thuỷ lợi. Chương trình đào tạo, giáo trình, tài liệu phục vụ giảng dạy và học tập tất cả đều docác thầy cô giáo  trong Khoa tự xây dựng. Do đặc thù của chuyên ngành đào tạo, nên có ít tài liệu giảng dạy và tài liệu giảng dạy ở trong nước, còn nguồn tài liệu từ nước ngoài thì rất khó.'),
(2, '', 'Từ cuối những năm 1980, nước ta từng bước chuyển sang nền kinh tế thị trường có sự điều tiết của nhà nước. Bên cạnh những thuận lợi mới, còn rất nhiều thách thức mới đối với Khoa như: Lý luận truyền thống của nền kinh tế tập trung bao cấp thì không còn phù hợp trong khi lý luận kinh tế mới thì chưa được kiểm chứng về khả năng phù hợp trong điều kiện Việt Nam; Cần phải xây dựng cơ cấu nội dung các môn học phù hợp cho một ngành mới cùng với các tài liệu giảng dạy thích hợp; Nên lựa chọn nguồn tài liệu của Việt Nam hay của nước ngoài để sử dụng cho các môn học với trọng tâm là kinh tế thuỷ lợi. Với tinh thần phát huy nội lực, vượt qua những khó khăn, cán bộ giáo viên trong Khoa đã làm được những việc như sau:\r\n\r\n- Xây dựng được một chương trình đào tạo cho toàn khoá theo nội dung cải cách giáo dục dùng cho ba chuyên ngành: Quản lý/kinh tế xây dựng, Kinh tế quản lý khai thác công trình thủy lợi và Kinh tế tài nguyên thiên nhiên;\r\n\r\n- Trong những năm đầu các bộ môn đã dành nhiều thời gian cho biên soạn tài liệu phục vụ giảng dạy và học tập. Lần đầu tiên có những giáo trình mang đặc thù của Ngành kinh tế thuỷ lợi ra đời, phục vụ kịp thời cho việc giảng dạy như: Kinh tế xây dựng; Kinh tế thuỷ nông; Kinh tế sử dụng tổng hợp nguồn nước; Pháp luật về tài nguyên nước; Kinh tế đầu tư xây dựng thủy lợi; Đơn giá dự toán; Tài chính tín dụng; Phân tích hoạt động kinh doanh; Phân tích đánh giá dự án đầu tư; Tổ chức sản xuất và quản lý thi công;…\r\n\r\n- Nâng cao chất lượng giảng dạy và đào tạo thông qua việc tranh thủ sự giúp đỡ của các cộng tác viên là giáo sư, phó giáo sư và giảng viên có kiến thức kinh tế thuỷ lợi ở trong và ngoài trường, trong công tác giảng dạy;\r\n\r\n- Thường xuyên tổ chức trao đổi học thuật trong khoa học với các khoa khác trong Trường và với các trường bạn;\r\n\r\n- Đẩy mạnh các hoạt động nghiên cứu khoa học và phục vụ sản xuất. Nhờ các hoạt động này mà trình độ của giảng viên được nâng cao cũng như tạo điều kiện để thày trò gắn lý luận với thực tiễn sản xuất, đồng thời, qua đó đã hình thành nên một số đề tài luận án tiến sĩ và được bảo vệ thành công ở trong và ngoài nước;\r\n\r\n- Mở rộng quan hệ hợp tác quốc tế. Đây là một công việc hết sức khó khăn, đòi hỏi có sự cố gắng, nỗ lực của đội ngũ giáo viên. Muốn thực hiện được công việc trên, người giáo viên không những phải nắm vững chuyên môn, thực tế của Việt Nam mà còn phải có trình độ ngoại ngữ nhất định để giao tiếp và trao đổi với bạn. Trong những năm qua Khoa đã nhiều lần tiếp xúc, làm việc với các giáo sư của Đại học Braunschweig (Đức), Đại học quốc gia Colorado (Hoa Kỳ), Đại học Vũ Hán (Trung Quốc), Đại học Thammasat (Thái lan), Viện Quản lý tưới tiêu quốc tế;\r\n\r\n- Năm 2000 trong khuôn khổ của dự án DANIDA WAterSPS “Nâng cao năng lực giảng dạy của Trường đại học Thủy lợi\" của Chính Phủ Đan Mạch, Khoa Kinh tế thủy lợi đã nhận được nhiều sự hỗ trợ đặc biệt như trang thiết bị văn phòng, cử giảng viên đi học ngắn và dài hạn, giáo sư Đan Mạch sang giảng dạy bồi dưỡng cho giảng viên của Khoa và đặc biệt là biên soạn nhiều cuốn giáo trình theo yêu cầu mới và tiêu chuẩn quốc tế như: Kinh tế vi mô và vĩ mô, Kinh tế môi trường, Kinh tế sử dụng tổng hợp nguồn nước, Kinh tế thủy lợi;\r\n\r\n- Trong chiến lược phát triển Nhà trường và đổi mới chương trình đào tạo, các thầy cô giáo đã tích cực tham gia vào việc xây dựng nội dung chương trình đào tạo theo các trường tiên tiến của Mỹ, dịch và biên soạn nhiều giáo trình cho chương trình đào tạo mới theo hệ thống tín chỉ của Nhà trường và của Khoa.\r\n\r\n- Cử giáo viên đi nghiên cứu ngắn hạn và dài hạn hoặc thực tập ở Đức, Hà Lan, Nga, Malaysia, Thái Lan, Singapore,... đã có 70% số giáo viên trong Khoa được đào tạo theo hình thức trên. Đó là những động lực thúc đẩy sự phát triển của Khoa;\r\n\r\n- Đặc biệt Khoa đã nhận được sự hỗ trợ mạnh mẽ và có hiệu quả của Bộ Nông nghiệp và Phát triển nông thôn, Bộ Giáo dục và Đào tạo và của Lãnh đạo Nhà trường trong suốt quá trình xây dựng và phát triển.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `chude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varbinary(255) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `thoigiandang` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `chude`, `noidung`, `hinhanh`, `tacgia`, `thoigiandang`) VALUES
(2, 'Danh sách phân công hướng dẫn đồ án tốt nghiệp ngành Quản lý xây dựng học kỳ 1 năm học 2020-2021', 'Bộ môn Quản lý xây dựng gửi các bạn sinh viên một số nội dung liên quan đến đồ án tốt nghiệp đợt học kỳ 1 năm học 2020-2021', '', 'hiền', '2020-11-11 22:20:13'),
(3, 'Giới thiệu về Khoa Kinh tế và Quản lý', 'Khoa Kinh tế và Quản lý được thành lập năm 1979. Trải qua 40 năm hình thành và phát triển, Khoa đã đạt được nhiều thành tích trong giảng dạy và nghiên cứu khoa học, góp phần vào sự nghiệp xây dựng và phát triển đất nước', '', 'hiền', '2020-11-10 22:18:31'),
(123, '346346', 'rhyretdhht', 0x43617074757265312e504e47, 'hien', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thungo`
--

CREATE TABLE `thungo` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thungo`
--

INSERT INTO `thungo` (`id`, `content`) VALUES
(1, 'Thư ngỏ gửi tới các cô giáo, thầy giáo, các anh chị và các bạn đã đến với trang Web của Khoa Kinh tế và quản lý\r\nKhoa Kinh tế và Quản lý được thành lập từ năm 1979 với mục tiêu đào tạo một lực lượng kỹ sư vừa có trình độ kỹ thuật và kinh tế trong ngành thuỷ lợi để đáp ứng yêu cầu của thực tiễn.\r\n\r\nSứ mệnh: Khoa Kinh tế và quản lý là đơn vị đào tạo nguồn nhân lực chất lượng cao và nghiên cứu khoa học về các lĩnh vực kinh tế và quản lý, cụ thể là các ngành quản lý xây dựng, kế toán, quản trị kinh doanh, kinh tế nhằm góp phần thúc đẩy nhanh quá trình công nghiệp hóa, hiện đại hóa và phát triển của đất nước, có năng lực hội nhập khu vực và quốc tế.\r\n\r\nMục tiêu phát triển của Khoa Kinh tế và Quản lý: phấn đấu trở thành một trung tâm đào tạo chất lượng cao và nghiên cứu khoa học có uy tín trong cả nước trong lĩnh vực kinh tế và quản lý, tiến tới được thừa nhận trong khu vực Đông Nam Á. Cụ thể: Đến năm 2025 trở thành trung tâm đào tạo và nghiên cứu khoa học chất lượng cao trong lĩnh vực kinh tế và quản lý, tạo sự khác biệt với các cơ sở đào tạo khác theo hướng đào tạo gắn liền với thực tiễn, liên kết với doanh nghiệp và đào tạo theo chuẩn khu vực.\r\n\r\nSau gần 40 năm xây dựng và phát triển, hiện nay Khoa đã có một đội ngũ cán bộ giảng dạy và viên chức trên 80 người, trong đó có 14 Phó giáo sư, tiến sĩ, trên 50 thạc sỹ. Với khoảng thời gian lịch sử đó, Khoa đã đạt được một số thành tựu quan trọng trong các lĩnh vực: đào tạo, nghiên cứu khoa học, chuyển giao công nghệ, phục vụ sản xuất kinh doanh và hợp tác quốc tế. Nhờ vậy, Khoa đã có một vị thế ngày càng vững mạnh trong trường Đại học Thủy lợi, cũng như trong xã hội và môi trường quốc tế.'),
(2, 'Bên cạnh việc đào tạo và phát triển nguồn lực quý báu nhất là đội ngũ cán bộ giảng dạy có trình độ cao và tâm huyết, Khoa cũng hết sức chú trọng việc khai thác các mối quan hệ trong nước và quốc tế và để tạo ra cơ sở vật chất và phương tiện phục vụ đào tạo hiện đại bổ sung vào những trang thiết bị đã được nhà trường đầu tư. Với tư cách là đối tác trong các dự án đào tạo phối hợp với các tổ chức quốc tế, cán bộ giảng dạy và sinh viên của Khoa có rất nhiều cơ hội để học hỏi, cập nhật kiến thức mới, phong cách tiếp cận mới thông qua các hoạt động trao đổi giảng viên, sinh viên với nhiều trường đại học của Pháp, Ðức, Úc, Mỹ, Đan Mạch,...\r\n\r\nThông qua các hội thảo khoa học, các chương trình nghiên cứu, tư vấn phối hợp với các doanh nghiệp, Khoa duy trì được mối liên kết chặt chẽ giữa đào tạo và lý thuyết với thực hành, mở ra cho sinh viên tốt nghiệp những cơ hội tìm kiếm việc làm và thăng tiến. Cũng chính nhờ mối quan hệ rộng rãi với bên ngoài mà các chương trình đào tạo của Khoa luôn được cập nhật và đạt được sự thích nghi cao với những yêu cầu thực tế của doanh nghiệp. Số lượng sinh viên đại học, sau đại học của Khoa không ngừng tăng trong những năm gần đây.'),
(3, 'Định hướng phát triển của Khoa:\r\n\r\n♦ Đa dạng hóa chương trình và loại hình đào tạo, tăng cường đào tạo ở trình độ cao như Thạc sĩ và Tiến sĩ.\r\n\r\n♦ Gắn đào tạo với thực tế thông qua việc liên kết đào tạo với các doanh nghiệp và các chương trình đào tạo ngắn hạn\r\n\r\n♦ Tư vấn cho các doanh nghiệp\r\n\r\n♦ Đẩy mạnh hợp tác đào tạo quốc tế để nâng cao năng lực và đổi mới chương trình và phương thức giảng dạy\r\n\r\nKhoa Kinh tế và Quản lý xin bày tỏ lòng biết ơn sâu sắc và chân thành đến các cấp lãnh đạo, các cơ quan, đoàn thể, các doanh nghiệp, các thế hệ thầy cô giáo, cán bộ nhân viên và sinh viên đã chung sức xây dựng Khoa trưởng thành và lớn mạnh trong thời gian qua.\r\n\r\nChúng tôi tin rằng trong thời gian tới Khoa tiếp tục là nơi đào tạo uy tín với những kỹ sư, nhà quản lý kinh doanh giỏi, là trung tâm tư vấn tin cậy cho các doanh nghiệp và các ngành kinh tế, góp phần đưa đất nước vững bước phát triển, tiến vào nền kinh tế tri thức và hội nhập quốc tế.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `fem`
--
ALTER TABLE `fem`
  ADD PRIMARY KEY (`userid`);

--
-- Chỉ mục cho bảng `lichsuhinhthanh`
--
ALTER TABLE `lichsuhinhthanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thungo`
--
ALTER TABLE `thungo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `fem`
--
ALTER TABLE `fem`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
