<?php 
class Cms60f5c57b007b3915360680_e44ef1c002bec7861c28ba942f8063f6Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    // var_dump($this['post']);
    if (isset($this->post->title)){
        $this->page->title = $this['post']->title;
        $this['imageCount'] = count($this['post']->featured_images);
    }else{
        header('Location: https://www.voltagehk.com/404');
    }
}

public function nextPost($post) {

    // get current cats
    // $postCats = $post->categories->pluck('id')->toArray();

    // Here you need to pass it as we are 
    // hardcoding category slug in URL so we have no data of category

    // IF YOU DONT WANT CAT COME FROM POST
    // YOU CAN HARD CODE THEM $postCats = ['2'] 
    // here 2 is id of category

    // use this cats to scope 
    $nextPost = $post->isPublished()->applySibling(-1)->first();
    
    // check if next is not availabe then return false
    if(!$nextPost) {        
        return false;
    }

    // create page link here same page
    $postPage = $this->page->getBaseFileName();

    // set URl so we can direct access .url
    $nextPost->setUrl($postPage, $this->controller);

    // set Cat URl so we can use it directly if needed
    $nextPost->categories->each(function($category) {
        $category->setUrl($this->categoryPage, $this->controller);
    });

    return $nextPost;

}

public function previousPost($post) {

    // get current cats
    // $postCats = $post->categories->pluck('id')->toArray();

    // IF YOU DONT WANT CAT COME FROM POST
    // YOU CAN HARD CODE THEM $postCats = ['2'] 
    // here 2 is id of category

    // use this cats to scope 
    $prevPost = $post->isPublished()->applySibling(1)->first();

    // check if nprevious ext is not availabe then return false
    if(!$prevPost) {        
        return false;
    }

    // create page link here same page
    $postPage = $this->page->getBaseFileName();

    // set URl so we can direct access .url
    $prevPost->setUrl($postPage, $this->controller);

    // set Cat URl so we can use it directly if needed
    $prevPost->categories->each(function($category) {
        $category->setUrl($this->categoryPage, $this->controller);
    });

    return $prevPost;

}
}
