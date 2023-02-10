@extends('layout.lp')

@section('content')

{{-- <h1 class="belih">Order Here</h1> --}}
<div class="beli">
    <div class="kanan">
        <img src="img/haha.png" alt="">
    </div>
    <div class="kiri">
        <form method="POST" action="/dashboard/form-transaksi">
            @csrf
            <div>
                <div class="name-email">
                    <div>
                        <div>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                    </div>
                </div><br>
                <div class="y" style="display: flex;column-gap: 20px; width: 50px; ">
                    <div>
                        <div class="custom-select">
                            <select name="produk_id" class="custom-select" id="inputGroupSelect02" style="width: 170px">
                                @foreach ($produk as $item)
                                <option value="{{ $item->id }}">{{ $item->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="qty" type="text" class="form-control" id="email" placeholder="qty"
                                style="width: 160px">
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="alamat" type="text" class="form-control" id="email" placeholder="address"
                                style="width: 170px">
                        </div>
                    </div>
                </div><br>
                <div class="g">
                    <div>
                        <textarea name="message" class="form-control" placeholder="Leave a message here" id="message"
                            style="height: 150px"></textarea>
                    </div>
                </div><br>

                <div class="btn">
                    <button type="submit">Order Now</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
     

    var x, i, j, l, ll, selElmnt, a, b, c;
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {

            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {

        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }


    document.addEventListener("click", closeAllSelect);

</script>
@endsection
