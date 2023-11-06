<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    private $teachers = [
        [
            "name" => "Hỏi dân IT với Eric",
            "description" => 'Youtube channel: Hỏi Dân IT
                             Tech Skills:
                             - Frontend: React.JS, Angular và Vue.
                             - Backend: Javascript với Node.js, Larvel và Spring Boots..',
            'exp' => '3.5',
            "image_path" => 'client/images/course/teacher/HoiDanIT.png',
        ],
        [
            "name" => "Khalid Dinh",
            "description" => 'Kỹ sư Devops. Có nhiều năm kinh nghiệm triển khai các mô hình Devops, CI/CD cho các dự án nước ngoài.

            Thành thạo việc sử dụng các công nghệ IT, Devops như: Linux, Docker, MySQL, ElasticSearch, RabbitMQ, Kafka, Nginx,...
            
            Thành thạo các mô hình CI/CD với Jenkins, GitLab CI
            
            Thành thạo lập trình các ngôn ngữ/framework: Java/Spring, NodeJS/Express, Python,...
            
            Thành thạo mô hình Microservices với việc triển khai trên các công nghệ cụm mới nhất: Kubernetes
            
            Hiểu rõ triết lý phát triển phần mềm theo mô hình Devops, DevSecOps, Agile,...',
            'exp' => '1.5',
            "image_path" => 'client/images/course/teacher/KhalidDinh.png',
        ],
        [
            "name" => "Luu Ho Phuong",
            "description" => '* Tôi có trên 19 năm kinh nghiệm làm việc tại các vị trí như : Lập trình viên, kỹ sư mạng, kỹ sư quản trị hệ thống, trưởng phòng IT, và giám đốc kỹ thuật cho các công ty IT của Việt Nam, Singapore, Nhật Bản.

            * Kinh nghiệm tham gia tư vấn thiết kế, triển khai, quản trị nhiều dự án. Xây dựng hệ thống ứng dụng, mạng, bảo mật, và điện toán đám mây trong và ngoài nước. Đã từng tham gia giảng dạy tại các trung tâm, học viện CNTT .
            
            * Có chứng chỉ quốc tế: MCSE Cloud Platform and Infrastructure, MCSE Server Infrastructure, LPIC-2 (Linux Professinal Institute), AWS Certified Solutions Architect, AWS Certified SysOps Administrator, Linux Academy Red Hat Certified Engineer',
            'exp' => '1.5',
            "image_path" => 'client/images/course/teacher/LuuHoPhuong.png',
        ],
       

    ];

    public function run()
    {
       
        foreach ($this->teachers as $teacher) {
            Teacher::updateOrCreate($teacher);
        }
    }
}
