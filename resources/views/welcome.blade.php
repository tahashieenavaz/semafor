<x-layout>
    <div class="w-200 mx-auto flex py-10">
        <div class="flex-1">
            <input type="text" class="text-3xl p-2 w-full" placeholder="Title" />

            <div contenteditable="true" id="editor" class="ring-0 outline-0">
                Content
            </div>
        </div>

        <aside>
            actions
        </aside>

        <x-toolbar />

    </div>

    <script>
        class Semafor {
            heading() {

            }
        }

        document.execCommand('defaultParagraphSeparator', false, 'p');
        const editor = document.getElementById('editor');
        const toolbar = document.querySelector("[data-toolbar]")

        function getCurrentParagraph() {
            const selection = window.getSelection();
            console.log(selection.rangeCount);

            if (!selection.rangeCount) return null;

            let node = selection.anchorNode;
            if (node.nodeType === Node.TEXT_NODE) node = node.parentNode;

            while (node && node !== editor && node.tagName !== 'P') {
                node = node.parentNode;
            }

            return node && node.tagName === 'P' ? node : null;
        }

        function hideToolbar() {
            toolbar.classList.add("hidden")
        }

        function showToolbar() {
            const para = getCurrentParagraph();
            if (!para) {
                toolbar.classList.add("hidden")
                return;
            }

            const rect = para.getBoundingClientRect();
            toolbar.classList.remove("hidden")
            toolbar.style.top = `${window.scrollY + rect.top - toolbar.offsetHeight - 5}px`;
            toolbar.style.left = `${window.scrollX + rect.left}px`;
        }

        editor.addEventListener('keydown', e => {
            if (e.code === "Escape") {
                console.log("sdfsdf");

                hideToolbar()
                return;
            }
        });
        editor.addEventListener("mouseup", showToolbar)
    </script>
</x-layout>
