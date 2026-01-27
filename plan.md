# ✅ CHECKLIST CHI TIẾT – RAG WEB QUẢN LÝ SINH VIÊN (SOLO DEV)

Timeline gợi ý: 5–6 tuần  
Mỗi phase xong là **có thứ để demo**

---

# 🧠 PHASE 0 – ANALYSIS & SETUP (Đã xong)

## Phân tích nghiệp vụ
- [x] Xác định vai trò: Student / Admin
- [x] Liệt kê câu hỏi AI phải trả lời
  - [x] Điều kiện dự thi (Eligibility)
  - [x] Giải thích kết quả học tập
  - [x] Hỏi quy chế đào tạo
- [x] Quyết định **chỉ dùng RAG (không Agent)**

## Setup kỹ thuật
- [x] Tạo repo Git & Init Project (`backend`)
- [x] Setup Laravel + Architecture (Service-Repository)
- [x] Setup Docker / Sail (Optional)
- [x] Setup Redis + Queue

### ✅ Done when
- [x] Đăng nhập được
- [x] Chạy được queue
- [x] Cấu trúc source code chuẩn

---

# 🧱 PHASE 1 – CORE ACADEMIC MODULE

## Database Tables
- [ ] `students` (Profile sinh viên)
- [ ] `subjects` (Môn học)
- [ ] `exams` (Kỳ thi)
- [ ] `exam_subjects` (Môn thi cụ thể)
- [ ] `student_exam_registrations` (Kết quả thi & Đăng ký)
- [ ] `eligibility_criterias` (Điều kiện dự thi & Rules)

## Backend (Service-Repository)
- [ ] CRUD Students
- [ ] CRUD Subjects & Exams
- [ ] Logic: Ghi nhận điểm & Trạng thái dự thi (`eligibility_status`)
- [ ] Logic: Kiểm tra điều kiện dự thi dựa trên Rules (`eligibility_criterias`)

## Frontend
- [ ] Trang danh sách sinh viên
- [ ] Trang chi tiết sinh viên (Profile)
- [ ] Trang bảng điểm & Lịch thi

### ✅ Done when
- Admin nhập được dữ liệu thi, sinh viên.
- Sinh viên xem được mình có đủ điều kiện dự thi hay không.

---

# 🧠 PHASE 2 – RAG DATA INGESTION (Knowledge Base)

## Database Tables
- [ ] `documents` (Thông tin file PDF quy chế)
- [ ] `document_chunks` (Vector Embedding & Content metadata)

## RAG Pipeline
- [ ] Upload & Validate PDF
- [ ] **Semantic Chunking**: Chia nhỏ văn bản theo điều khoản/chương.
- [ ] Generate Embedding (OpenAI/Gemini).
- [ ] Lưu trữ Vector vào Database.

### ✅ Done when
- Upload file PDF "Quy chế đào tạo".
- Database có dữ liệu chunks và vectors tương ứng.

---

# 🤖 PHASE 3 – RAG CHAT BACKEND & LOGIC

## Database Tables
- [ ] `chat_sessions` (Quản lý phiên chat)
- [ ] `chat_messages` (Nội dung chat & Sources)

## Backend Logic
- [ ] Search Service: **Hybrid Search** (Fulltext + Vector).
- [ ] AI Service: Context Window Construction.
- [ ] System Prompt: "Academic Advisor" với rule lấy từ `eligibility_criterias`.

## API
- [ ] API Chat (Stream response).
- [ ] API History.

### ✅ Done when
- API trả về câu trả lời kèm `sources` (trích dẫn quy chế).

---

# 💬 PHASE 4 – CHAT UI & UX (React)

## Frontend Components
- [ ] ChatBubble / ChatWindow Component.
- [ ] Markdown Renderer (Hiển thị câu trả lời AI đẹp).
- [ ] Source Citation UI (Click vào nguồn ra đoạn văn bản).

## UX
- [ ] Loading Skeleton.
- [ ] Auto-scroll.
- [ ] Error Handling.

### ✅ Done when
- Sinh viên chat mượt mà với AI trên giao diện web.

---

# 🎓 PHASE 5 – HỌC VỤ & EXPLAINABLE AI

## Logic học vụ
- [ ] Tích hợp `eligibility_criterias` vào prompt.
- [ ] Phân tích trượt/đậu: "Tại sao tôi không được thi môn này?" -> Trích dẫn rule cụ thể.

### ✅ Done when
- AI giải thích chính xác lý do dựa trên dữ liệu thật của sinh viên.

---

# 🧪 PHASE 6 – TESTING & DEPLOY

## Test case
- [ ] Unit Test Services.
- [ ] Test trường hợp dữ liệu rỗng / sai format.
- [ ] Test Prompt Injection.

## Deploy
- [ ] Cấu hình Production ENV.
- [ ] Seed dữ liệu mẫu Demo.

### ✅ Done when
- Hệ thống chạy ổn định trên môi trường demo.
