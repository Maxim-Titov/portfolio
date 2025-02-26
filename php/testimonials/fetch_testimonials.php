<?php
class Testimonial {
    private $pdo;

    public function __construct(Database $db) {
        $this->pdo = $db->getConnection();
    }

    public function getAllTestimonials() {
        $query = "
            SELECT 
                testimonials.content, 
                testimonials.created_at,
                users.username 
            FROM 
                testimonials 
            INNER JOIN 
                users 
            ON 
                testimonials.user_id = users.user_id 
            ORDER BY 
                testimonials.created_at DESC
        ";

        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHomePageTestimonials() {
        $query = "
            SELECT
                testimonials.content, 
                testimonials.created_at,
                users.username 
            FROM 
                testimonials
            INNER JOIN 
                users
            ON 
                testimonials.user_id = users.user_id 
            ORDER BY 
                testimonials.created_at DESC LIMIT 3
        ";

        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
