<?php

namespace ElePHPant\Breadcrumb;


/**
 * Class Breadcrumb
 * @package ElePHPant\Breadcrumb
 * @author Sérgio Danilo Jr. <https://github.com/sergiodanilojr>
 */
class Breadcrumb
{
    /**
     * @var
     */
    private $base;
    /**
     * @var null|string
     */
    private $separator;
    /**
     * @var array
     */
    private $links;

    /**
     * Breadcrumb constructor.
     * @param null|string $separator
     */
    public function __construct(?string $separator = "/")
    {
        $this->separator = $separator;
        $this->links = [];
    }

    /**
     * @param string $baseUrl
     * @param string $title
     * @param bool $showTitle
     * @param null|string $icon
     * @param string|null $class
     * @return $this
     */
    public function base(
        string $baseUrl,
        string $title,
        bool $showTitle = true,
        ?string $icon = null,
        string $class = null
    )
    {
        $this->base = [
            "url" => $baseUrl,
            "title" => $title,
            "showTitle" => $showTitle,
            "icon" => $icon,
            "class" => $class
        ];
        return $this;
    }

    /**
     * @param string $url
     * @param string $title
     * @param null|string $class
     * @return Breadcrumb
     */
    public function addCrumb(string $title, ?string $url, ?string $class = null): Breadcrumb
    {
        $this->links[] = $this->parts($title, $url, $class);
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $init = "<nav aria-label=\"breadcrumb\"><ol class=\"breadcrumb\">";
        $end = "</ol></nav>";

        return $init . $this->setBase() . $this->mount($this->links) . $end;
    }

    public function allCrumbs(): ?array
    {
        return (!empty($this->links) ? $this->links : null);
    }

    /**
     * @param array $links
     * @return string
     */
    private function mount(array $links): ?string
    {
        if (!$links) {
            return null;
        }
        $last = count($links) - 1;
        $breadcrumb = "";

        for ($b = 0; $b <= $last; $b++) {

            if ($b == $last) {
                $breadcrumb .= "<li class=\"breadcrumb-item active {$links[$b]["class"]}\" aria-current=\"page\">{$this->separator}{$links[$b]["title"]}</li>" . "\n";
            } else {
                $breadcrumb .= "<li class=\"breadcrumb-item {$links[$b]["class"]}\"><a href=\"{$links[$b]["url"]}\">{$this->separator}{$links[$b]["title"]}</a></li>" . "\n";
            }
        }

        return $breadcrumb;
    }

    /**
     * @return string
     */
    private function setBase(): string
    {
        $title = ($this->base["showTitle"] ? $this->base["title"] : null);
        $icon = $this->base["icon"];
        $class = $this->base["class"];
        $url = $this->base["url"];

        if (!$this->links) {
            return "<li class=\"breadcrumb-item active {$class}\" aria-current=\"page\">{$icon}{$title}</li>";
        }

        return "<li class=\"breadcrumb-item {$class}\"><a href=\"{$url}\">{$icon}{$title}</a></li>";
    }

    /**
     * @param string $url
     * @param string $title
     * @return array
     */
    private function parts(
        string $title,
        string $url = null,
        string $class = null
    ): array
    {
        $url = $this->setUrl($url);

        return [
            "url" => $url,
            "title" => $title,
            "class" => $class
        ];
    }

    /**
     * @param string $url
     * @return string
     */
    private function setUrl(string $url): string
    {
        $url = str_replace($this->base["url"], "", $url);
        $url = ($url[0] == "/" ? $url : "/" . $url);

        return $this->base["url"] . $url;
    }
}