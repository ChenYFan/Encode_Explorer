# Encode_Explorer

🚀一款强悍而小巧的PHP列表程序[本人持续维护与汉化]

仅仅通过base64解码实现列表UI.

**既可以作为私有网盘管理，也可以作为共有云共享，还可以作为后台文件管理，可以设置密码和权限**

请注意,本项目来自[marekrei的encode-explorer项目](https://github.com/marekrei/encode-explorer)
所有的版权要求均找Ta.
由于原作者已经两年没更新了,顺手就托管了.(当然我没有联系原作者)

实际体验：

![image](https://user-images.githubusercontent.com/53730587/76675602-f4ff8200-65f5-11ea-8329-a8e8b9a08cc6.png)

![image](https://user-images.githubusercontent.com/53730587/76675607-0779bb80-65f6-11ea-9c50-a0cb17778b17.png)

![image](https://user-images.githubusercontent.com/53730587/76675619-26784d80-65f6-11ea-8699-0d20a12f55dc.png)

> ~~图标没有替换完全,近期正在修改~~ 已完成！

## 使用：

复制repo中 `EE汉化版.php` ,部署到你的php空间上，访问即可！

### 版本

原版不支持 `PHP>=7.0.0` 因为PHP7 不再支持与类名相同的构造方法，构造方法统一使用 `__construct()`

汉化版已修复 [PHP7.3.4通过]

## 注意：

- 请开启拓展 `fileinfo` 和 `curl` ,对于 `PHP<7.0.0` 则还需开启 `enchant`

## 为什么选用EE?
因为它有一下优点:
- 轻量级(相对与h5ai)
- 开源更容易修改.
- 运行更快,小巧，只有一个文件.
- 既可以作为私有网盘管理，也可以作为共有云共享，还可以作为后台文件管理，可以设置密码和权限

## 本人Todo:
- [x] 汉化
- [x] 更新所有图标
- [ ] 添加unzip功能[正在实现]
- [ ] 增加更多的语言(你可以在源代码`428`到`458`行看到实例文件)<--字没有打错,是`实例`
- [ ] 增加更多的图标(以base64为格式)
## 你也可以帮忙!

恳请大家使用Pull Requests 中贡献更多的语言和图标.
