<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link page-box" href="lista_de_usuarios?page=<?php if ($page > 1) { $page = $page - 1; echo $page; } else { echo $page; } ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <?php for ($page_number = 1; $page_number <= $total; $page_number++) : ?>

        <li class="page-item"><a class="page-link page-box" href="lista_de_usuarios?page=<?= $page_number?>"><?= $page_number ?></a></li>

    <?php endfor; ?>

    <li class="page-item">
      <a class="page-link page-box" href="lista_de_usuarios?page=<?php if ($page < $total) { $page = $page + 1; echo $page; } else { echo $page; } ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>