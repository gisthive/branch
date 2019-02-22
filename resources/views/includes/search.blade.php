<div class="searchBar control has-icons-left has-icons-right">
          <form action="/search" method="POST">
          {{csrf_field()}}
            <input name="q" class="input is-rounded" type="search" placeholder="Search Medication...">
            <span class="icon is-small is-left">
              <i class="fa fa-search"></i>
            </span>
            <div class="is-small" style="position: absolute; right: 0; top: 0; ">
              <button class="button is-rounded is-primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
          </div>