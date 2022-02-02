 <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
    <!-- <?php //include '/../navigasi/rating_admin.php'; ?> -->
    <?php if($r['rating'] == 0  ){ 
        echo '
        <label for="rating-5"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-4"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-3"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
    }elseif ($r['rating'] == 1 ){ 
        echo '
        <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-4"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-3"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
    }elseif ($r['rating'] == 2 ){ 
        echo '
        <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-3"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
    }elseif ($r['rating'] == 3 ){ 
        echo '
        <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-3"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
    }elseif ($r['rating'] == 4 ){ 
        echo '
        <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-3"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
    }elseif ($r['rating'] == 5 ){ 
        echo '
        <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-3"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star rating"></i></label>
        <label for="rating-2"><i class="fas fa-fw fa-star rating"></i></label>
        ';
    }
    ?> 
    <span class="text-black"><?= $r['rating'];?> / 5</span> 
</td>