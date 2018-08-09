<?php
namespace App\Services;
use App\Article;
use App\User;

class ArticleService {

  public function all(): array {
      return Article::all()->sortByDesc('created_at')
                            ->values()
                            ->all();
  }

  public function getForUser($user): array {
      return $user->articles->sortByDesc('created_at')
                            ->values()
                            ->all();
  }

    public function make($user, string $title, string $body): Article {
      $article = new Article();
      $article->title = $title;
      $article->body = $body;
      $user->articles()->save($article);

      return $article;
    }

    public function update(Article $article, string $title, string $body){
      $article->title = $title;
      $article->body = $body;

      $article->save();
    }

  /**
   * @param Article $article
   * @throws \Exception
   */
  public function delete(Article $article) {
      $article->delete();
    }


}