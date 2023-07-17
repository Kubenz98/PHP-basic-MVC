<?php

class Posts extends Controller
{
  private $postModel;
  public function __construct()
  {
    $this->postModel = $this->model('post');
  }
  public function index()
  {
    $data = [
      'title' => 'Posts',
      'posts' => $this->postModel->getPosts()
    ];
    $this->view('posts/index', $data);
  }
}
